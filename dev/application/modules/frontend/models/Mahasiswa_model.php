<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends MY_Model {

	protected $_table_name 		= 'mahasiswa';
	protected $_primary_key 	= 'id_mahasiswa';
	protected $_order_by 		= 'tgl_dibuat_mhs';
	protected $_order_by_type 	= 'desc';


	public $rules_mhs = [
			'nama_mahasiswa' => [
				'field' => 'nama_mahasiswa',
				'label' => 'Nama Mahasiswa',
				'rules' => 'trim|xss_clean|required|max_length[150]'
				],
			'jenis_kelamin' => array(
				'field' => 'jenis_kelamin',
				'label' => 'Jenis Kelamin',
				'rules' => 'trim|xss_clean|required'				
				),
			'tanggal_lahir' => array(
				'field' => 'tanggal_lahir',
				'label' => 'Tanggal Lahir',
				'rules' => 'trim|xss_clean|required'				
				),
			'agama' => array(
				'field' => 'agama',
				'label' => 'Agama',
				'rules' => 'trim|xss_clean|required'				
				),
			'tempat_lahir' => array(
				'field' => 'tempat_lahir',
				'label' => 'Tempat Lahir',
				'rules' => 'trim|xss_clean|required|max_length[50]'				
				),
			'nik' => array(
				'field' => 'nik',
				'label' => 'NIK',
				'rules' => 'trim|required|max_length[50]|callback_check_mahasiswa[nik]'				
				),
			'kewarganegaraan' => array(
				'field' => 'kewarganegaraan',
				'label' => 'Kewarganegaraan',
				'rules' => 'trim|xss_clean|required'				
				),
			'kelurahan' => array(
				'field' => 'kelurahan',
				'label' => 'Kelurahan',
				'rules' => 'trim|xss_clean|required'				
				),
			'kecamatan' => array(
				'field' => 'kecamatan',
				'label' => 'Kecamatan',
				'rules' => 'trim|xss_clean|required'				
				),
			'kabupaten' => array(
				'field' => 'kabupaten',
				'label' => 'Kabupaten',
				'rules' => 'trim|xss_clean|required'				
				),
			'provinsi' => array(
				'field' => 'provinsi',
				'label' => 'Provinsi',
				'rules' => 'trim|xss_clean|required'				
				),
			'penerima_kps' => array(
				'field' => 'penerima_kps',
				'label' => 'Penerima KPS',
				'rules' => 'trim|xss_clean|required'				
				),
		];

	function __construct(){
		parent::__construct();
	}

	function get_mahasiswa($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $cari=NULL, $group_by=[], $where_in=[], $where_not_in=[] ){

		if(count($where_in) > 0){
			$this->db->where_in('a.approval', $where_in);
		}

		if(count($where_not_in) > 0){
			$this->db->where_not_in('ID', $where_not_in);
		}

		if(count($group_by) > 0 ){
			$this->db->group_by($group_by);
		}

		$this->db->join('mahasiswa_registrasi b', 'mahasiswa.id_mahasiswa = b.fk_mahasiswa');
		$this->db->join('prodi c', 'b.id_prodi = c.id_prodi');
		$this->db->join('periode d', 'b.id_periode_masuk = d.id_periode');


		return parent::get_by($where, $limit, $offset, $single, $select, $cari);
	}

	function count_mhs($where = NULL, $cari=NULL, $group_by=[], $where_in=[], $where_not_in=[] ){

		if(count($where_in) > 0){
			$this->db->where_in('a.approval', $where_in);
		}

		if(count($where_not_in) > 0){
			$this->db->where_not_in('ID', $where_not_in);
		}

		if(count($group_by) > 0 ){
			$this->db->group_by($group_by);
		}

		$this->db->join('mahasiswa_registrasi b', 'mahasiswa.id_mahasiswa = b.fk_mahasiswa');


		return parent::count($where, $cari);
	}

	function insert_update($post, $params){
		$mahasiswa = [
			'nama_mahasiswa' 		=> antisqli($post['nama_mahasiswa']),
			'password' 				=> antisqli(password_hash($post['nim'], PASSWORD_DEFAULT)),
			'jenis_kelamin' 		=> antisqli($post['jenis_kelamin']),
			'tanggal_lahir'		 	=> antiSqli(date_format(date_create(trim($post['tanggal_lahir'])),'Y-m-d')),
			'id_agama' 				=> antisqli($post['agama']),
			'tempat_lahir' 			=> antisqli($post['tempat_lahir']),
			'nik' 					=> antisqli(just_number($post['nik'])),
			'nisn' 					=> antisqli(just_number($post['nisn'])),
			'npwp' 					=> antisqli(just_number($post['npwp'])),
			'id_negara' 			=> antisqli($post['kewarganegaraan']),
			'jalan' 				=> antisqli($post['jalan']),
			'rt' 					=> antisqli($post['rt']),
			'rw' 					=> antisqli($post['rw']),
			'dusun' 				=> antisqli($post['dusun']),
			'kelurahan' 			=> antisqli($post['kelurahan']),
			'kode_pos'		 		=> antisqli($post['kode_pos']),
			'kecamatan' 			=> antisqli($post['kecamatan']),
			'kabupaten'			 	=> antisqli($post['kabupaten']),
			'provinsi' 				=> antisqli($post['provinsi']),
			'id_jenis_tinggal' 		=> antisqli($post['jenis_tinggal']),
			'id_alat_transportasi' 	=> antisqli($post['alat_transportasi']),
			'telepon' 				=> antisqli($post['telepon']),
			'handphone' 			=> antisqli($post['handphone']),
			'email' 				=> antisqli($post['email']),
			'penerima_kps' 			=> antisqli($post['penerima_kps']),
			'nomor_kps' 			=> antisqli($post['no_kps']),
			'nik_ayah' 				=> $post['nik_ayah']== "" ? null : antisqli(just_number($post['nik_ayah'])),
			'nama_ayah' 			=> $post['nama_ayah']== "" ? null : antisqli($post['nama_ayah']),
			'tanggal_lahir_ayah' 	=> $post['tgl_lahir_ayah']== "" ? null : antiSqli(date_format(date_create(trim($post['tgl_lahir_ayah'])),'Y-m-d')),
			'id_pendidikan_ayah' 	=> $post['pendidikan_ayah']== "" ? null : antisqli($post['pendidikan_ayah']),
			'id_pekerjaan_ayah' 	=> $post['pekerjaan_ayah']== "" ? null : antisqli($post['pekerjaan_ayah']),
			'id_penghasilan_ayah' 	=> $post['penghasilan_ayah']== "" ? null : antisqli($post['penghasilan_ayah']),
			'nik_ibu' 				=> $post['nik_ibu']== "" ? null : antisqli(just_number($post['nik_ibu'])),
			'nama_ibu' 				=> $post['nama_ibu']== "" ? null : antisqli($post['nama_ibu']),
			'tanggal_lahir_ibu' 	=> $post['tgl_lahir_ibu']== "" ? null : antiSqli(date_format(date_create(trim($post['tgl_lahir_ibu'])),'Y-m-d')),
			'id_pendidikan_ibu' 	=> $post['pendidikan_ibu']== "" ? null : antisqli($post['pendidikan_ibu']),
			'id_pekerjaan_ibu' 		=> $post['pekerjaan_ibu']== "" ? null : antisqli($post['pekerjaan_ibu']),
			'id_penghasilan_ibu' 	=> $post['penghasilan_ibu']== "" ? null : antisqli($post['penghasilan_ibu']),
			'nama_wali' 			=> $post['nama_wali']== "" ? null : antisqli($post['nama_wali']),
			'tanggal_lahir_wali' 	=> $post['tgl_lahir_wali']== "" ? null : antiSqli(date_format(date_create(trim($post['tgl_lahir_wali'])),'Y-m-d')),
			'id_pendidikan_wali' 	=> $post['pendidikan_wali']== "" ? null : antisqli($post['pendidikan_wali']),
			'id_pekerjaan_wali' 	=> $post['pekerjaan_wali']== "" ? null : antisqli($post['pekerjaan_wali']),
			'id_penghasilan_wali' 	=> $post['penghasilan_wali']== "" ? null : antisqli($post['penghasilan_wali']),
		];

		if($params == "tambah"){
			$mahasiswa_regis = [
				'nim' 					=> antisqli($post['nim']),
				'id_jalur_daftar' 		=> antisqli($post['jalur_daftar']),
				'id_jenis_daftar' 		=> antisqli($post['jenis_pendaftaran']),
				'id_pembiayaan' 		=> antisqli($post['pembiayaan']),
				'biaya_masuk' 			=>antisqli(just_number($post['biaya_masuk'])),
				'id_periode_masuk' 		=> antisqli($post['periode']),
				'tanggal_daftar' 		=> antiSqli(date_format(date_create(trim($post['tanggal_daftar'])),'Y-m-d')),
				'id_prodi' 				=> antisqli($post['prodi']),
				'dari_pt_lain' 			=> antisqli($post['dari_pt_lain']),
				'id_prodi_asal' 		=> $post['prodi_asal']== "" ? null : antiSqli($post['prodi_asal']),
			];
		}

		$this->db->trans_begin();

			if(isset($post['id'])){
				if(!empty($post['id'])){
					//bagian edit
					$this->db->where('id_mahasiswa', $post['id']);
					$this->db->update('mahasiswa', $mahasiswa);
					
					// $this->db->where('fk_mahasiswa', $post['id']);
					// $this->db->update('mahasiswa_registrasi', $mahasiswa_regis);
				}
			}else{
				//bagian insert
				$id_mahasiswa = $this->get_id();
				$mahasiswa['id_mahasiswa'] = $id_mahasiswa;
				$this->db->insert('mahasiswa', $mahasiswa);
				
				if($params == "tambah"){
					$id_mahasiswa_regis = $this->db->query("select uuid() as id")->row()->id;
					$mahasiswa_regis['id_registrasi_mahasiswa'] = $id_mahasiswa_regis;
					$mahasiswa_regis['fk_mahasiswa'] = $id_mahasiswa;

					$this->db->insert('mahasiswa_registrasi', $mahasiswa_regis);	
				}
				
			}
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        }else {
            $this->db->trans_commit();
            return TRUE;
        }
	}

	// start datatables
    var $column_order = array(null, 'a.nisn_mahasiswa', 'a.nama_mahasiswa', 'b.nim', 'c.nama_program_studi');
    var $column_search = array('a.nisn_mahasiswa', 'a.nama_mahasiswa', 'b.nim', 'c.nama_program_studi');
    var $order = array('b.tanggal_daftar' => 'desc'); // default order 
 
    private function _get_datatables_query() {
        $this->db->select('a.*, b.nim, c.nama_program_studi');
        $this->db->from('mahasiswa a');
        $this->db->join('mahasiswa_registrasi b', 'a.id_mahasiswa  = b.fk_mahasiswa');
        $this->db->join('prodi c', 'b.id_prodi  = c.id_prodi');
        if($this->input->post('cariprodi')){
            $this->db->where('b.id_prodi', $this->input->post('cariprodi'));
        }
        $this->db->where('b.status_aktif_mhs_rgs', 1);
        $this->db->order_by('b.tanggal_daftar', 'desc');
        $i = 0;
        foreach ($this->column_search as $key => $value) { // loop column 
            if(@$_POST['search']['value']) { // if datatable send POST for search
                if($i===0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($value, $_POST['search']['value']);
                } else {
                    $this->db->or_like($value, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }  else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables() {
        $this->_get_datatables_query();
        if(@$_POST['length'] != -1)
        $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_all() {
        $this->db->from('mahasiswa a');
        $this->db->join('mahasiswa_registrasi b', 'a.id_mahasiswa  = b.fk_mahasiswa');
        $this->db->join('prodi c', 'b.id_prodi  = c.id_prodi');
        $this->db->where('b.status_aktif_mhs_rgs', 1);
        $this->db->order_by('b.tanggal_daftar', 'desc');
        return $this->db->count_all_results();
    }
    // end datatables

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/modules/staf/models/Mahasiswa_model.php */