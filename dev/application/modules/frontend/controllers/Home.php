<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function index(){

		$ucapan = $this->db->query("
			SELECT * FROM rsvp WHERE ucapan_rsvp IS NOT NULL ORDER BY tgl_created_rsvp desc LIMIT 0, 20
		")->result();

		// print_r("<pre>"); print_r($ucapan); die();

		$data = [
			'title' => 'Home',
			'ucapan' => $ucapan
		];
		$this->load->view('template_frontend', $data, FALSE);
		// $this->template->load('template_frontend', set_url('frontend'), $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/admin/controllers/Dashboard.php */