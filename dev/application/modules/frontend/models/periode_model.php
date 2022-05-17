<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode_model extends MY_Model {

	protected $_table_name 		= 'periode';
	protected $_primary_key 	= 'id_periode';
	protected $_order_by 		= 'dibuat_tgl_periode';
	protected $_order_by_type 	= 'desc';

	public $rules_prodi = [
			'thn_ajaran_start' => [
				'field' => 'thn_ajaran_start',
				'label' => 'Tahun ajaran Mulai',
				'rules' => 'trim|xss_clean|callback_check_periode[thn_periode]'
			],
			'thn_ajaran_end' => array(
				'field' => 'thn_ajaran_end',
				'label' => 'Tahun ajaran Selesai',
				'rules' => 'trim|xss_clean|callback_check_periode[thn_periode]'				
			),
			'semester' => array(
				'field' => 'semester',
				'label' => 'Semester',
				'rules' => 'trim|xss_clean|required'				
			),
			'nama_periode' => array(
				'field' => 'nama_periode',
				'label' => 'Nama Periode',
				'rules' => 'trim|xss_clean|required'				
			),
			'tgl_mulai_periode' => array(
				'field' => 'tgl_mulai_periode',
				'label' => 'Tanggal Mulai Periode',
				'rules' => 'trim|xss_clean|callback_check_periode[tgl_periode]'				
			),
			'tgl_mulai_edom' => array(
				'field' => 'tgl_mulai_edom',
				'label' => 'Tanggal Mulai Pengisian Edom',
				'rules' => 'trim|xss_clean|callback_check_periode[tgl_edom]'				
			),
			'tgl_selesai_periode' => array(
				'field' => 'tgl_selesai_periode',
				'label' => 'Tanggal Selesai Periode',
				'rules' => 'trim|xss_clean|callback_check_periode[tgl_periode]'				
			),
			'status_aktif_periode' => array(
				'field' => 'status_aktif_periode',
				'label' => 'Status Aktif',
				'rules' => 'trim|xss_clean|required'				
			)
		];

}

/* End of file periode_model.php */
/* Location: ./application/modules/staf/models/periode_model.php */