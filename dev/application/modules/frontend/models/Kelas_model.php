<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends MY_Model {

	protected $_table_name 		= 'kelas';
	protected $_primary_key 	= 'id_kelas';
	protected $_order_by 		= 'tgl_buat_kelas';
	protected $_order_by_type 	= 'desc';

	public $rules_kelas = [
			'periode' => [
				'field' => 'periode',
				'label' => 'Periode',
				'rules' => 'trim|xss_clean|required'
				],
			'prodi' => array(
				'field' => 'prodi',
				'label' => 'Prodi',
				'rules' => 'trim|xss_clean|required'				
				),
			'matkul' => array(
				'field' => 'matkul',
				'label' => 'Mata Kuliah',
				'rules' => 'trim|xss_clean|required'				
				),
			'kode_kelas' => array(
				'field' => 'kode_kelas',
				'label' => 'Kode Kelas',
				'rules' => 'trim|xss_clean|required|max_length[15]|callback_check_kelas[kode_kelas]'				
				),
			'nama_kelas' => array(
				'field' => 'nama_kelas',
				'label' => 'Biaya Masuk',
				'rules' => 'trim|xss_clean|required|max_length[100]'				
				),
			'sks_kelas' => array(
				'field' => 'sks_kelas',
				'label' => 'SKS Kelas',
				'rules' => 'trim|xss_clean|required|numeric|max_length[4]'				
				),
			'rencana_tatap_muka_kelas' => array(
				'field' => 'rencana_tatap_muka_kelas',
				'label' => 'Rencana Tatap Muka',
				'rules' => 'trim|xss_clean|required|numeric|max_length[4]'				
				),
			'realisasi_tatap_muka_kelas' => array(
				'field' => 'realisasi_tatap_muka_kelas',
				'label' => 'Realisasi tatap muka',
				'rules' => 'trim|xss_clean|max_length[4]'				
				),
			'tanggal_mulai_efektif_kelas' => array(
				'field' => 'tanggal_mulai_efektif_kelas',
				'label' => 'Tanggal Mulai',
				'rules' => 'trim|xss_clean|required'				
				),
			'tanggal_akhir_efektif_kelas' => array(
				'field' => 'tanggal_akhir_efektif_kelas',
				'label' => 'Tanggal Selesai',
				'rules' => 'trim|xss_clean|required'				
				),
		];

	function get_kelas($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL, $cari=NULL, $group_by=[], $where_in=[], $where_not_in=[] ){

        if(count($where_in) > 0){
            $this->db->where_in('a.approval', $where_in);
        }

        if(count($where_not_in) > 0){
            $this->db->where_not_in('ID', $where_not_in);
        }

        if(count($group_by) > 0 ){
            $this->db->group_by($group_by);
        }

        $this->db->join('periode b', 'kelas.fk_periode = b.id_periode');
        $this->db->join('prodi c', 'kelas.fk_prodi = c.id_prodi');
        $this->db->join('mata_kuliah d', 'kelas.fk_matkul = d.id_matkul');


        return parent::get_by($where, $limit, $offset, $single, $select, $cari);
    }

}

/* End of file Kelas_model.php */
/* Location: ./application/modules/staf/models/Kelas_model.php */