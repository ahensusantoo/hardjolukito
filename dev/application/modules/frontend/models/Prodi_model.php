<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends MY_Model {

	protected $_table_name 		= 'prodi';
	protected $_primary_key 	= 'id_prodi';
	protected $_order_by 		= 'dibuat_tgl_prodi';
	protected $_order_by_type 	= 'desc';

	public $rules_prodi = [
			'kode_prodi' => [
				'field' => 'kode_prodi',
				'label' => 'Kode Prodi',
				'rules' => 'trim|xss_clean|required|callback_kode_prodi'
				],
			'nama_prodi' => array(
				'field' => 'nama_prodi',
				'label' => 'Nama Prodi',
				'rules' => 'trim|xss_clean|required'				
				),
			'jenjang_pendidikan' => array(
				'field' => 'jenjang_pendidikan',
				'label' => 'Jejang Pendidikan',
				'rules' => 'trim|xss_clean|required'				
				),
			'status_aktif_prodi' => array(
				'field' => 'status_aktif_prodi',
				'label' => 'Status Aktif',
				'rules' => 'trim|xss_clean|required'				
				)
		];

	function __construct(){
		parent::__construct();
	}

	function get_prodi($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $cari=NULL, $group_by=[], $where_in=[], $where_not_in=[] ){

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

}

/* End of file Prodi_model.php */
/* Location: ./application/modules/staf/models/Prodi_model.php */