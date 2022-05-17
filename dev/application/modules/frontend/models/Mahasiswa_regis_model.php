<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_regis_model extends MY_Model {

	protected $_table_name 		= 'mahasiswa_registrasi';
	protected $_primary_key 	= 'id_registrasi_mahasiswa';
	protected $_order_by 		= 'tanggal_daftar';
	protected $_order_by_type 	= 'desc';


	public $rules_mhs_regis = [
			'nim' => [
				'field' => 'nim',
				'label' => 'NIM Mahasiswa',
				'rules' => 'trim|xss_clean|required|max_length[25]|callback_check_mahasiswa_regis[nim]'
				],
			'jenis_pendaftaran' => array(
				'field' => 'jenis_pendaftaran',
				'label' => 'Jenis Pendaftaran',
				'rules' => 'trim|xss_clean|required'				
				),
			'jalur_daftar' => array(
				'field' => 'jalur_daftar',
				'label' => 'Jalur Daftar',
				'rules' => 'trim|xss_clean|required'				
				),
			'pembiayaan' => array(
				'field' => 'pembiayaan',
				'label' => 'Pembiayaan',
				'rules' => 'trim|xss_clean|required'				
				),
			'biaya_masuk' => array(
				'field' => 'biaya_masuk',
				'label' => 'Biaya Masuk',
				'rules' => 'trim|xss_clean|required|max_length[25]'				
				),
			'periode' => array(
				'field' => 'periode',
				'label' => 'Periode',
				'rules' => 'trim|xss_clean|required'				
				),
			'tanggal_daftar' => array(
				'field' => 'tanggal_daftar',
				'label' => 'Tanggal Daftar',
				'rules' => 'trim|xss_clean|required'				
				),
			'prodi' => array(
				'field' => 'prodi',
				'label' => 'Prodi',
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

		$this->db->join('jenjang_pendidikan b', 'prodi.id_jenjang_pendidikan = b.id_jenjang_pendidikan');


		return parent::get_by($where, $limit, $offset, $single, $select, $cari);
	}

	function insert_update($post){
		$mahasiswa_regis = [
			'nim' 					=> antisqli($post['nim']),
			'fk_mahasiswa' 			=> antisqli($post['id_mhs']),
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


		$this->db->trans_begin();
			//bagian edit
			$this->db->where('fk_mahasiswa', $post['id_mhs']);
			$this->db->update('mahasiswa_registrasi', ['status_aktif_mhs_rgs'=>false]);

			$id_mahasiswa_regis = $this->db->query("select uuid() as id")->row()->id;
			$mahasiswa_regis['id_registrasi_mahasiswa '] = $id_mahasiswa_regis;
			$this->db->insert('mahasiswa_registrasi', $mahasiswa_regis);			
			
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
    var $column_order = array(null, 'a.nim'); 
    var $column_search = array('a.nim');
    var $order = array('a.tanggal_daftar' => 'desc'); 
 
    private function _get_datatables_query() {
        $this->db->select('a.*, b.nama_pendaftaran, c.nama_periode, d.nama_program_studi');
        $this->db->from('mahasiswa_registrasi a');
        $this->db->join('jenis_pendaftaran b', 'a.id_jenis_daftar = b.id_jenis_pendaftaran ');
        $this->db->join('periode c', 'a.id_periode_masuk = c.id_periode');
        $this->db->join('prodi d', 'a.id_prodi = d.id_prodi');
        // $this->db->where('a.status_aktif_mhs_rgs', 1);
        if($this->input->post('by_fk_mhs')){
            $this->db->where('a.fk_mahasiswa', $this->input->post('by_fk_mhs'));
        }
        $this->db->order_by('a.tanggal_daftar', 'desc');
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
        $this->db->from($this->_table_name);
        // $this->db->where('fk_mahasiswa', $post['fk_mahasiswa']);
        if($this->input->post('by_fk_mhs')){
            $this->db->where('a.fk_mahasiswa', $this->input->post('by_fk_mhs'));
        }
        // $this->db->where('status_aktif_mhs_rgs', 0);
        return $this->db->count_all_results();
    }
    // end datatables

}

/* End of file Mahasiswa_regis_model.php */
/* Location: ./application/modules/staf/models/Mahasiswa_regis_model.php */