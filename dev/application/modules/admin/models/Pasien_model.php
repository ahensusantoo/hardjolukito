<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends MY_Model {

	protected $_table_name 		= 'pasien';
	protected $_primary_key 	= 'id';
	protected $_order_by 		= 'id';
	protected $_order_by_type 	= 'desc'; 



	public $rules_pasien = [
			'nama' => [
				'field' => 'nama',
				'label' => 'Nama Pasien',
				'rules' => 'trim|xss_clean|required'
			],
			'no_rm' => [
				'field' => 'no_rm',
				'label' => 'No RM',
				'rules' => 'trim|xss_clean|required'
			],
			'umur' => [
				'field' => 'umur',
				'label' => 'Umur',
				'rules' => 'trim|xss_clean|required'
			],
			'jenis_kelamin' => [
				'field' => 'jenis_kelamin',
				'label' => 'Jenis Kelamin',
				'rules' => 'trim|xss_clean|required'
			],
			'diagnosa' => [
				'field' => 'diagnosa',
				'label' => 'Diagnosa',
				'rules' => 'trim|xss_clean|required'
			],
		];

	function get_pasien($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $cari=NULL, $group_by=[], $where_in= null, $where_not_in=[]){

        // $this->db->where($where);

        if($where_in != null){
        	// $this->db->group_start();
        		// print_r($where_in); die();
        		if(isset($where_in['progres'])){
		            $this->db->where_in('progres_komplain', $where_in['progres']);
        		}

        		if(isset($where_in['lihat'])){
		            $this->db->where_in('status_dilihat', $where_in['lihat']);
        		}
            // $this->db->group_end(); 
        }

        if(count($where_not_in) > 0){
            $this->db->where_not_in('ID', $where_not_in);
        }

        if(count($group_by) > 0 ){
            $this->db->group_by($group_by);
        }

		$this->db->join('diagnosa b', 'pasien.id_diagnosa = b.id');


  //       $query  = $this->db->get($this->_table_name);
		// $b= $this->db->last_query($query);
		// print_r("<pre>"); print_r($b); die();


        return parent::get_by($where, $limit, $offset, $single, $select, $cari);
    }


    function count_pasien($where = NULL, $cari=NULL, $group_by=[], $where_in= null, $where_not_in=[]){
        if($where_in != null){
        	// $this->db->group_start();
        		// print_r($where_in); die();
        		if(isset($where_in['progres'])){
		            $this->db->where_in('progres_komplain', $where_in['progres']);
        		}

        		if(isset($where_in['lihat'])){
		            $this->db->where_in('status_dilihat', $where_in['lihat']);
        		}
            // $this->db->group_end(); 
        }

        if(count($where_not_in) > 0){
            $this->db->where_not_in('ID', $where_not_in);
        }

        if(count($group_by) > 0 ){
            $this->db->group_by($group_by);
        }

		$this->db->join('diagnosa b', 'pasien.id_diagnosa = b.id');


        return parent::count($where, $cari);
    }


}

/* End of file Pasien_model.php */
/* Location: ./application/modules/admin/models/Pasien_model.php */