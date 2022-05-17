<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['pasien_model', 'diagnosa_model']);
	}

	function index(){
		global $SConfig;
		
		if(@$_GET['page'] != "" || !empty($_GET['page'])) {
			$offset = ($_GET['page'] - 1) * $SConfig->_admin_perpage;
			$hal_aktif = $_GET['page'];
			// print_r($offset); die();
		}else{
			$offset 	= 0;
			$hal_aktif = 1;
		}

		// $where['status_rmv_anggota'] = 0;

		if(@$_GET['pencarian'] != "" || !empty($_GET['pencarian'])) { 
			$cari = ['no_rm', 'nama'];
		}

		$total_row 	= $this->pasien_model->count_pasien(null, @$cari);
		$record 	= $this->pasien_model->get_pasien(null, $SConfig->_admin_perpage, $offset, false, ['pasien.*', 'b.diagnosa'], @$cari);
		// print_r("<pre>"); print_r($record); die();

		$data = [
			'title' 		=> 'Pasien',
			'total_rows' 	=> $total_row,
			'perpage' 		=> $SConfig->_admin_perpage,
			'record' 		=> $record,
			'hal_aktif' 	=> $hal_aktif,
			'jumlah_hal' 	=> ceil($total_row/$SConfig->_admin_perpage),
		];

		$this->template->load('template_admin', set_url('pasien/index'), $data);	
	}


	function tambah(){
		$get_diagnosa = $this->diagnosa_model->get();
		$get_columns = $this->pasien_model->get_columns_table();
		$record = new stdClass();
		foreach ($get_columns as $key => $value) {
			$record->$value = null;
		}
		$data = [
			'title' 		=> 'Tambah Pasien',
			'page' 			=> 'tambah',
			'record'		=> $record,
			'diagnosa'		=> $get_diagnosa,
		];
		$this->template->load('template_admin', set_url('pasien/tambah_edit'), $data);
	}

	function edit($id=null){
		if( $id == null ){
			$this->session->set_flashdata('danger', 'Permintaan anda tidak dapat diprosess!!!');
			redirect(set_url(@$this->uri->segment(2)),'refresh');
		}

		$count_record = $this->pasien_model->count(['id'=>$id]);
		if($count_record < 1 ){
			$this->session->set_flashdata('danger', 'Permintaan anda tidak dapat diprosess!!!');
			redirect(set_url(@$this->uri->segment(2)),'refresh');	
		}

		$get_diagnosa = $this->diagnosa_model->get();
		
		$record 	= $this->pasien_model->get($id, true);

		// print_r('<pre>'); print_r($record); die();

		$data = [
			'title' 		=> 'Edit Diagnosa',
			'page' 			=> 'edit',
			'record'		=> $record,
			'diagnosa'		=> $get_diagnosa,
		];
		$this->template->load('template_admin', set_url('pasien/tambah_edit'), $data);
	}
	

	function action($params){
		$post = $this->input->post(null, true);
		if(!$this->input->is_ajax_request()){
			$this->session->set_flashdata('danger', 'Permintaan anda tidak dapat diresponse!!!');
			redirect($_SERVER['HTTP_REFERER'],'refresh');
		}

		if($params == "tambah" || $params == "edit"){
			$this->form_validation->set_rules($this->pasien_model->rules_pasien);
			$this->form_validation->set_message($this->mesage);
			$this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
			if($this->form_validation->run() == TRUE) {
				$data = [
					'nama'	=> antiSqli($post['nama']),
					'no_rm'	=> antiSqli($post['no_rm']),
					'umur'	=> antiSqli($post['umur']),
					'jenis_kelamin'	=> antiSqli($post['jenis_kelamin']),
					'id_diagnosa'	=> antiSqli($post['diagnosa']),
				];
				if(!empty($post['id']) || $post['id'] != ""){
					//proses Update
					$id =  antiSqli($post['id']);
					$count_record = $this->pasien_model->count(['id'=>$id]);
					if($count_record < 1 ){
						$this->session->set_flashdata('danger', 'Permintaan anda tidak dapat diprosess!!!');
						redirect(set_url(@$this->uri->segment(2)),'refresh');
					}
					$query = $this->pasien_model->update($data, ['id'=>$id]);
				}else{
					// proses Insert
					// $data['id'] = $this->pasien_model->get_id();
					$query = $this->pasien_model->insert($data, false);
				}

				if($query){
					$msg = [
						'status' => true,
					];
					$this->session->set_flashdata('success', 'Data berhasil di '.$params);
				}else{
					$msg = [
						'status' => false,
						'pesan'	 => 'Data berhasil di'.$params,
					];
				}
			}else {
				//validation salah
				$msg = [
					'status' => false, 
					'errors' => $this->form_validation->error_array(),
				];
			}
			echo json_encode($msg);
		}elseif($params == "hapus"){
			$id =  antiSqli($post['id']);
			$count_record = $this->pasien_model->count(['id'=>$id]);
			if($count_record < 1 ){
				$this->session->set_flashdata('danger', 'Permintaan anda tidak dapat diprosess!!!');
				redirect(@$this->uri->segment(2),'refresh');
			}

			// $data = [
			// 	'status_aktif_anggota' 	=> false,
			// 	'status_rmv_anggota' 	=> true,
			// ];
			// $data_record = $this->pasien_model->get($id, true);
			$query = $this->pasien_model->delete($id);
			if($query){
				// $target_file = $_SERVER['DOCUMENT_ROOT'].$SConfig->_document_root_add.'/uploads/images/anggota/profile/'.$data_record->foto_anggota;
				// if(file_exists($target_file) && !empty($data_record->foto_anggota) ){
				// 	unlink($target_file);
				// }
				$msg = [
					'status' => true,
				];
				$this->session->set_flashdata('success', 'Data berhasil di '.$params);
			}else{
				$msg = [
					'status' => false,
					'pesan'	 => 'Data Gagal di'.$params,
				];
			}
			echo json_encode($msg);
			die();
		}else{
			//jika tidak ada params yang sesuai
			$this->session->set_flashdata('danger', 'Permintaan anda tidak dapat diprosess!!!');
			redirect(set_url(@$this->uri->segment(2)),'refresh');
		}

	}

}

/* End of file Pasien.php */
/* Location: ./application/modules/admin/controllers/Pasien.php */