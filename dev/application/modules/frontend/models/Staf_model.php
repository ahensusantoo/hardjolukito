<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_model extends MY_Model {

	protected $_table_name 		= 'staf';
	protected $_primary_key 	= 'id_staf';
	protected $_order_by 		= 'dibuat_tgl_staf';
	protected $_order_by_type 	= 'desc';


	function __construct(){
		parent::__construct();
	}

	function get_staf($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $enkripsi=NULL, $group_by=[], $where_in=[], $where_not_in=[] ){
		// $this->db->join('table_name', 'table_name.field = table_name.field')
		// print_r("<pre>"); print_r($where_in); die();

		if(count($where_in) > 0){
			$this->db->where_in('a.approval', $where_in);
		}

		if(count($where_not_in) > 0){
			$this->db->where_not_in('ID', $where_not_in);
		}

		if(count($group_by) > 0 ){
			$this->db->group_by($group_by);
		}

		// $this->db->join('perusahaan b', 'anggota_sistem.kd_perusahaan = b.id_perusahaan', 'left');
		// $this->db->join('jabatan c', 'anggota_sistem.kd_jabatan = c.id_jabatan', 'left');
		// $this->db->join('divisi d', 'anggota_sistem.kd_divisi = d.id_divisi', 'left');
		// $this->db->join('tugas_detail e', 'anggota_sistem.id_anggota = d.id_divisi', 'left');


		return parent::get_by($where, $limit, $offset, $single, $select, $enkripsi);
	}

}

/* End of file Admin_model.php */
/* Location: ./application/modules/admin/models/Admin_model.php */