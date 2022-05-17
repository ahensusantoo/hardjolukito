<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model{
	protected $_table_name;
	protected $_order_by;
	protected $_order_by_type;
	// protected $_primary_filter = 'intval';
	protected $_primary_key;


	function __construct(){
		parent::__construct();
	}

	public function get_id(){
		return $this->db->query("select uuid() as id")->row()->id;
	}

	public function get_columns_table(){
		return $this->db->list_fields($this->_table_name);
	}

	public function insert($data,$batch=FALSE){
		if($batch == TRUE){
			$this->db->trans_begin();
				$this->db->insert_batch($this->_table_name, $data);
			$this->db->trans_complete();
	        if ($this->db->trans_status() === FALSE) {
	            # Something went wrong.
	            $this->db->trans_rollback();
	            return FALSE;
	        }else {
	            # Everything is Perfect. 
	            # Committing data to the database.
	            $this->db->trans_commit();
	            return TRUE;
	        }
		}
		else{
			$this->db->trans_begin();
				$this->db->set($data);
				$this->db->insert($this->_table_name);
				// $id = $this->db->insert_id();
				// return $id;
			$this->db->trans_complete();
	        if ($this->db->trans_status() === FALSE) {
	            # Something went wrong.
	            $this->db->trans_rollback();
	            return FALSE;
	        }else {
	            # Everything is Perfect. 
	            # Committing data to the database.
	            $this->db->trans_commit();
	            return TRUE;
	        }
		}
	}

	public function update($data,$where=array()){
		$this->db->trans_begin();
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update($this->_table_name);
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            # Something went wrong.
            $this->db->trans_rollback();
            return FALSE;
        }else {
            # Everything is Perfect. 
            # Committing data to the database.
            $this->db->trans_commit();
            return TRUE;
        }
	}	

	public function get($id=NULL, $single=FALSE, $cari=NULL){
		$id_primary = $this->_primary_key;
		// print_r($this->_primary_key); die();
		
		if($id != NULL){
			// $filter = $this->_primary_filter;
			// $id = $filter($id); 
			$this->db->where($this->_primary_key,$id);
			$method = 'row';
		}

		if($cari != null){
			$i = 0;
	        foreach ($cari as $filter) // looping awal
	        {       
	        	// echo var_dump($i);
                if($i==0) // looping awal
                {
	                $this->db->group_start(); 
                    $this->db->like($filter, $_GET['pencarian']);
                }
                else
                {
                    $this->db->or_like($filter, $_GET['pencarian']);
                    // $this->db->or_like($filter, $_GET['pencarian'], 'after');
                }
 
                if(count($cari) - 1 == $i) 
                $this->db->group_end(); 
	            $i++;
            }
	        
		}
		

		if($this->_order_by_type){
			$this->db->order_by($this->_order_by,$this->_order_by_type);
		}
		else{
			$this->db->order_by($this->_order_by);
		}

		if ($single == TRUE){
            $method = 'row';
            $query  = $this->db->get($this->_table_name)->$method();
            // if(!empty($query)){
	           //  $query->$id_primary = enkripsiDekripsi($query->$id_primary, 'enkripsi');
            // }
            // if($enkripsi != NULL){
            // 	if(!empty($query)){
	           //  	foreach ($enkripsi as $key_enkripsi => $value_enkripsi) {
	           //  		$query->$value_enkripsi = enkripsiDekripsi($query->$value_enkripsi, 'enkripsi');
	           //  	}
	           //  }
            // }
        }else{
            $method = 'result';
            $query  = $this->db->get($this->_table_name)->$method();
         //    foreach($query as $key => $value){
	        //     $query[$key]->$id_primary = enkripsiDekripsi($value->$id_primary, 'enkripsi');
	        //     if($enkripsi != NULL){
	        //     	if(!empty($query)){
		       //      	foreach ($enkripsi as $key_enkripsi => $value_enkripsi) {
		       //      		$query[$key]->$value_enkripsi = enkripsiDekripsi($value->$value_enkripsi, 'enkripsi');
		       //      	}
		       //      }
		       //  }
	        // }
        }
        return $query;

		// return $this->db->get($this->_table_name)->$method();
	}

	public function get_by($where = NULL, $limit = NULL, $offset = NULL, $single = FALSE, $select = NULL, $cari = NULL){
		// $ayam = "ayam";
		// print_r("<pre>"); print_r($single); die();
		if($select != NULL){
			$this->db->select($select);
		}

		if($where){
			$this->db->where($where);
		}

		if(($limit) && ($offset)){
			$this->db->limit($limit,$offset);
		}
		else if($limit){
			$this->db->limit($limit);
		}

		return $this->get(NULL, $single, $cari);
	}

	public function delete($id){
		// $filter = $this->_primary_filter;
		// $id = $filter($id);

		if(!$id){
			return FALSE;
		}

		$this->db->trans_begin();
			$this->db->where($this->_primary_key,$id);
			$this->db->limit(1);
			$this->db->delete($this->_table_name);
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            # Something went wrong.
            $this->db->trans_rollback();
            return FALSE;
        }else {
            # Everything is Perfect. 
            # Committing data to the database.
            $this->db->trans_commit();
            return TRUE;
        }
	}

	public function get_num_rows($id=NULL){
		if($id != NULL){
			// $filter = $this->_primary_filter;
			// $id = $filter($id);
			$this->db->where($this->_primary_key, $id);
		}

		if($this->_order_by_type){
			$this->db->order_by($this->_order_by,$this->_order_by_type);
		}
		else{
			$this->db->order_by($this->_order_by);
		}

		return $this->db->get($this->_table_name);
	}


	public function count($where = NULL, $cari=null){
		if($where){
			$this->db->where($where);
		}

		$this->db->from($this->_table_name);
		if($cari != null){
			$i = 0;
	        foreach ($cari as $filter) // looping awal
	        {       
	        	// echo var_dump($i);
                if($i==0) // looping awal
                {
	                $this->db->group_start(); 
                    $this->db->like($filter, $_GET['pencarian']);
                }
                else
                {
                    $this->db->or_like($filter, $_GET['pencarian']);
                    // $this->db->or_like($filter, $_GET['pencarian'], 'after');
                }
 
                if(count($cari) - 1 == $i) 
                $this->db->group_end(); 
	            $i++;
            }
	        
		}

		return $this->db->count_all_results();
	}


	public function countLike($where = NULL){
		if($where){
			$this->db->like($where);
		}

		$this->db->from($this->_table_name);
		return $this->db->count_all_results();
	}

}