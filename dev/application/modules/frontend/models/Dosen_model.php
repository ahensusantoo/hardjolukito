<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends MY_Model {

	protected $_table_name 		= 'dosen';
	protected $_primary_key 	= 'id_dosen';
	protected $_order_by 		= 'dibuat_tgl_dosen';
	protected $_order_by_type 	= 'desc';

	public $rules_prodi = [
			'nidn_dosen' => [
				'field' => 'nidn_dosen',
				'label' => 'NIDN Dosen',
				'rules' => 'trim|xss_clean|max_length[100]|callback_check_dosen[nidn_dosen]'
			],
			'nip_dosen' => array(
				'field' => 'nip_dosen',
				'label' => 'NIP Dosen',
				'rules' => 'trim|xss_clean|required|max_length[100]|callback_check_dosen[nip_dosen]'				
			),
			'nama_dosen' => array(
				'field' => 'nama_dosen',
				'label' => 'Nama Dosen',
				'rules' => 'trim|xss_clean|required|max_length[150]'				
			),
			'tempat_lahir_dosen' => array(
				'field' => 'tempat_lahir_dosen',
				'label' => 'Tempat Lahir',
				'rules' => 'trim|xss_clean|required|max_length[150]'				
			),
			'tgl_lahir_dosen' => array(
				'field' => 'tgl_lahir_dosen',
				'label' => 'Tanggal Lahir',
				'rules' => 'trim|xss_clean|required'				
			),
			'jenis_kelamin_dosen' => array(
				'field' => 'jenis_kelamin_dosen',
				'label' => 'Jenis Kelamin',
				'rules' => 'trim|xss_clean|required'				
			),
			'nik_dosen' => array(
				'field' => 'nik_dosen',
				'label' => 'NIK Dosen',
				'rules' => 'trim|xss_clean|required|max_length[100]|callback_check_dosen[nik_dosen]'				
			),
			'npwp_dosen' => array(
				'field' => 'npwp_dosen',
				'label' => 'NPWP Dosen',
				'rules' => 'trim|xss_clean|required|max_length[100]'				
			),
			'status_cpns_dosen' => array(
				'field' => 'status_cpns_dosen',
				'label' => 'Status PNS',
				'rules' => 'trim|xss_clean|max_length[1]'				
			),
			'no_sk_cpns_dosen' => array(
				'field' => 'no_sk_cpns_dosen',
				'label' => 'No SK PNS',
				'rules' => 'trim|xss_clean|max_length[100]'				
			),
			'tgl_sk_cpns_dosen' => array(
				'field' => 'tgl_sk_cpns_dosen',
				'label' => 'Tgl SK PNS',
				'rules' => 'trim|xss_clean'				
			),
			'no_sk_pengangkatan_dosen' => array(
				'field' => 'no_sk_pengangkatan_dosen',
				'label' => 'No SK Pengangkatan',
				'rules' => 'trim|xss_clean|required|max_length[100]|callback_check_dosen[no_sk]'				
			),
			'mulai_sk_pengangkatan_dosen' => array(
				'field' => 'mulai_sk_pengangkatan_dosen',
				'label' => 'Tgl Mulai SK Pengangkatan',
				'rules' => 'trim|xss_clean|required'				
			),
			'alamat_dosen' => array(
				'field' => 'alamat_dosen',
				'label' => 'Alamat',
				'rules' => 'trim|xss_clean|required'				
			),
			'telepon_dosen' => array(
				'field' => 'telepon_dosen',
				'label' => 'Telepon',
				'rules' => 'trim|xss_clean|max_length[15]'				
			),
			'handphone_dosen' => array(
				'field' => 'handphone_dosen',
				'label' => 'Handphone',
				'rules' => 'trim|xss_clean|max_length[15]'				
			),
			'email_dosen' => array(
				'field' => 'email_dosen',
				'label' => 'E-mail',
				'rules' => 'trim|xss_clean|required|max_length[100]|valid_email|callback_check_dosen[email_dosen]'				
			),
			'status_pernikahan_dosen' => array(
				'field' => 'status_pernikahan_dosen',
				'label' => 'Status Pernikahan',
				'rules' => 'trim|xss_clean|required'				
			),
			'status_aktif_dosen' => array(
				'field' => 'status_aktif_dosen',
				'label' => 'Status Aktif',
				'rules' => 'trim|xss_clean|required'				
			),
		];



	// start datatables
    var $column_order 	= array(null, 'nidn_dosen', 'nip_dosen', 'nama_dosen'); //set column field database for datatable orderable
    var $column_search 	= array('nidn_dosen', 'nip_dosen', 'nama_dosen'); //set column field database for datatable searchable
    var $order 			= array('dibuat_tgl_dosen' => 'desc'); // default order 
 
    private function _get_datatables_query() {
        $this->db->select('a.*');
        $this->db->from('dosen a');
        $this->db->where('a.status_aktif_dosen', 1);
        $this->db->where('a.status_hapus_dosen', 0);
        $this->db->order_by('a.dibuat_tgl_dosen', 'desc');
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
        $this->db->where('status_hapus_dosen', 0);
        return $this->db->count_all_results();
    }
    // end datatables

}

/* End of file Dosen_model.php */
/* Location: ./application/modules/staf/models/Dosen_model.php */