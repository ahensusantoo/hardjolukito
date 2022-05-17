<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_kuliah_model extends MY_Model {

	protected $_table_name 		= 'mata_kuliah';
	protected $_primary_key 	= 'id_matkul';
	protected $_order_by 		= 'tgl_buat_matkul';
	protected $_order_by_type 	= 'desc';


	public $rules_matkul = [
			'prodi' => [
				'field' => 'prodi',
				'label' => 'Prodi',
				'rules' => 'trim|xss_clean|required'
			],
			'kode_matkul' => array(
				'field' => 'kode_matkul',
				'label' => 'Kode Mata Kuliah',
				'rules' => 'trim|xss_clean|required|callback_check_matkul[kode_matkul]'				
			),
			'nama_matkul' => array(
				'field' => 'nama_matkul',
				'label' => 'Nama Mata Kuliah',
				'rules' => 'trim|xss_clean|required'				
			),
			'jenis_matkul' => array(
				'field' => 'jenis_matkul',
				'label' => 'Jenis Mata Kuliah',
				'rules' => 'trim|xss_clean|required'				
			),
			'kelompok_matkul' => array(
				'field' => 'kelompok_matkul',
				'label' => 'Kelompok Mata Kuliah',
				'rules' => 'trim|xss_clean|required'				
			),
			'sks_tatap_muka' => array(
				'field' => 'sks_tatap_muka',
				'label' => 'SKS Tatap Muka',
				'rules' => 'trim|xss_clean|required'				
			),
			'tanggal_mulai_efektif_matkul' => array(
				'field' => 'tanggal_mulai_efektif_matkul',
				'label' => 'Tanggal Mulai Mata Kuliah',
				'rules' => 'trim|xss_clean|required'				
			),
			'tanggal_akhir_efektif_matkul' => array(
				'field' => 'tanggal_akhir_efektif_matkul',
				'label' => 'Tanggal Akhir Mata Kuliah',
				'rules' => 'trim|xss_clean|required'				
			)
		];

	function get_matkul($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $cari=NULL, $group_by=[], $where_in=[], $where_not_in=[] ){

		if(count($where_in) > 0){
			$this->db->where_in('a.approval', $where_in);
		}

		if(count($where_not_in) > 0){
			$this->db->where_not_in('ID', $where_not_in);
		}

		if(count($group_by) > 0 ){
			$this->db->group_by($group_by);
		}

		$this->db->join('prodi b', 'mata_kuliah.fk_prodi = b.id_prodi');


		return parent::get_by($where, $limit, $offset, $single, $select, $cari);
	}

}

/* End of file Mata_kuliah_model.php */
/* Location: ./application/modules/staf/models/Mata_kuliah_model.php */