<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends Frontend_Controller {

	public function index(){
		$data = [
			'title' => 'Home',
		];
		$this->load->view(set_url('katalog/index'), $data, FALSE);
	}

}

/* End of file Katalog.php */
/* Location: ./application/modules/frontend/controllers/Katalog.php */