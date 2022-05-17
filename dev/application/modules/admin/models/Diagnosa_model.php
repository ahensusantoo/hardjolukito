<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa_model extends MY_Model {

	protected $_table_name 		= 'diagnosa';
	protected $_primary_key 	= 'id';
	protected $_order_by 		= 'id';
	protected $_order_by_type 	= 'desc'; 



	public $rules_diagnosa = [
			'diagnosa' => [
				'field' => 'diagnosa',
				'label' => 'Diagnosa',
				'rules' => 'trim|xss_clean|required'
			],
		];

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/modules/mahasiswa/models/Mahasiswa_model.php */