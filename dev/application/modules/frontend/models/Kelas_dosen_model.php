<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_dosen_model extends MY_Model {

	protected $_table_name 		= 'kelas_dosen';
	protected $_primary_key 	= 'id_kelas_dosen';
	protected $_order_by 		= 'tgl_dibuat_kelas_dosen';
	protected $_order_by_type 	= 'desc';
    
    public $rules_kelas_dosen = [
            'nama_dosen' => [
                'field' => 'nama_dosen',
                'label' => 'Nama Dosen',
                'rules' => 'trim|xss_clean|required|callback_check_dosen_kelas'
                ],
            'nidn_dosen' => [
                'field' => 'nidn_dosen',
                'label' => 'Dosen',
                'rules' => 'trim|xss_clean|required|callback_check_dosen_kelas'
                ],
            'nip_dosen' => [
                'field' => 'nip_dosen',
                'label' => 'Dosen',
                'rules' => 'trim|xss_clean|callback_check_dosen_kelas'
                ],
            'jml_sks' => [
                'field' => 'jml_sks',
                'label' => 'jumlah SKS',
                'rules' => 'trim|xss_clean|required|numeric'
                ],
            'rencana_tatap_muka' => array(
                'field' => 'rencana_tatap_muka',
                'label' => 'Rencana Tatap Muka',
                'rules' => 'trim|xss_clean|required|numeric'                
                ),
            'realisasi_tatap_muka' => array(
                'field' => 'realisasi_tatap_muka',
                'label' => 'Realisasi Tatap Muka',
                'rules' => 'trim|xss_clean|required|numeric'                
                ),
            
        ];


    function get_kelas_dosen($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $cari=NULL, $group_by=[], $where_in=[], $where_not_in=[] ){

        if(count($where_in) > 0){
            $this->db->where_in('a.approval', $where_in);
        }

        if(count($where_not_in) > 0){
            $this->db->where_not_in('ID', $where_not_in);
        }

        if(count($group_by) > 0 ){
            $this->db->group_by($group_by);
        }

        $this->db->join('kelas b', 'kelas_dosen.fk_kelas = b.id_kelas');
        $this->db->join('dosen c', 'kelas_dosen.fk_dosen = c.id_dosen');


        return parent::get_by($where, $limit, $offset, $single, $select, $cari);
    }

	// start datatables
    var $column_order = array(null, 'c.nidn_dosen', 'c.nip_dosen', 'c.nama_dosen'); //set column field database for datatable orderable
    var $column_search = array('c.nidn_dosen', 'c.nip_dosen', 'c.nama_dosen'); //set column field database for datatable searchable
    var $order = array('tgl_dibuat_kelas_dosen' => 'desc'); // default order 
 
    private function _get_datatables_query() {
        $this->db->select('a.*, c.nidn_dosen, c.nip_dosen, c.nama_dosen');
        $this->db->from('kelas_dosen a');
        // $this->db->join('kelas b', 'a.fk_kelas = b.id_kelas');
        $this->db->join('dosen c', 'a.fk_dosen = c.id_dosen');
        if($this->input->post('filter_kelas')){
            $this->db->where('a.fk_kelas', $this->input->post('filter_kelas'));
        }
        $this->db->where('status_hapus_kelas_dosen', 0);
        $this->db->order_by('tgl_dibuat_kelas_dosen', 'desc');
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
        $this->db->where('status_hapus_kelas_dosen', 0);
        return $this->db->count_all_results();
    }
    // end datatables

}

/* End of file Kelas_dosen_model.php */
/* Location: ./application/modules/staf/models/Kelas_dosen_model.php */