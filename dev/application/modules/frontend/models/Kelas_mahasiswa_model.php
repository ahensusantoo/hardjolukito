<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_mahasiswa_model extends MY_Model {

	protected $_table_name 		= 'kelas_mahasiswa';
	protected $_primary_key 	= 'id_kelas_mhs';
	protected $_order_by 		= 'tgl_dibuat_kelas_mhs';
	protected $_order_by_type 	= 'desc';
    
    public $rules_kelas_mhs = [
            'nama_mahasiswa' => [
                'field' => 'nama_mahasiswa',
                'label' => 'Mahasiswa',
                'rules' => 'trim|xss_clean|required|callback_check_mhs_kelas'
                ],
            'nim_mahasiswa' => [
                'field' => 'nim_mahasiswa',
                'label' => 'Mahasiswa',
                'rules' => 'trim|xss_clean|required|callback_check_mhs_kelas'
                ],
            'nisn_mahasiswa' => [
                'field' => 'nisn_mahasiswa',
                'label' => 'Mahasiswa',
                'rules' => 'trim|xss_clean|callback_check_mhs_kelas'
                ],
            'jml_tatap_muka_mhs' => [
                'field' => 'jml_tatap_muka_mhs',
                'label' => 'jumlah Tatap Muka',
                'rules' => 'trim|xss_clean|required|numeric'
                ],
            
        ];


    function get_kelas_mhs($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $cari=NULL, $group_by=[], $where_in=[], $where_not_in=[] ){

        if(count($where_in) > 0){
            $this->db->where_in('a.approval', $where_in);
        }

        if(count($where_not_in) > 0){
            $this->db->where_not_in('ID', $where_not_in);
        }

        if(count($group_by) > 0 ){
            $this->db->group_by($group_by);
        }

        $this->db->join('mahasiswa b', 'kelas_mahasiswa.fk_mahasiswa = b.id_mahasiswa');
        $this->db->join('mahasiswa_registrasi c', 'b.id_mahasiswa = c.fk_mahasiswa');


        return parent::get_by($where, $limit, $offset, $single, $select, $cari);
    }

	// start datatables
    var $column_order = array(null, 'nim', 'nama_mahasiswa', 'nisn'); 
    var $column_search = array('nim', 'nama_mahasiswa', 'nisn');
    var $order = array('tgl_dibuat_kelas_mhs' => 'desc'); 
 
    private function _get_datatables_query() {
        $this->db->select('*');
        $this->db->from('kelas_mahasiswa a');
        $this->db->join('mahasiswa b', 'a.fk_mahasiswa = b.id_mahasiswa');
        $this->db->join('mahasiswa_registrasi c', 'b.id_mahasiswa = c.fk_mahasiswa');
        if($this->input->post('filter_kelas')){
            $this->db->where('a.fk_kelas', $this->input->post('filter_kelas'));
        }
        $this->db->where('a.status_hapus_kls_mhs', 0);
        $this->db->where('c.status_aktif_mhs_rgs', 1);
        $this->db->order_by('tgl_dibuat_kelas_mhs', 'desc');
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
        $this->db->where('status_hapus_kls_mhs', 0);
        return $this->db->count_all_results();
    }
    // end datatables

}

/* End of file Kelas_mahasiswa_model.php */
/* Location: ./application/modules/staf/models/Kelas_mahasiswa_model.php */