<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('');
	}

	public function index(){
		global $SConfig;
		
		// if(@$_GET['page'] != "" || !empty($_GET['page'])) {
		// 	$offset = ($_GET['page'] - 1) * $SConfig->_admin_perpage;
		// 	$hal_aktif = $_GET['page'];
		// 	// print_r($offset); die();
		// }else{
		// 	$offset 	= 0;
		// 	$hal_aktif = 1;
		// }


		// $count_all_rsvp = $this->rsvp_model->count();
		// $count_hadir_rsvp = $this->rsvp_model->count(['status_rsvp' => 1]);
		// $count_tidak_hadir_rsvp = $this->rsvp_model->count(['status_rsvp' => 2]);

		// // $where['status_rmv_anggota'] = 0;

		// if(@$_GET['pencarian'] != "" || !empty($_GET['pencarian'])) { 
		// 	$cari = ['nama_rsvp'];
		// }

		

		// $total_row 	= $this->rsvp_model->count(null, @$cari);
		// $record 		= $this->rsvp_model->get_by(null, $SConfig->_admin_perpage, $offset, false, null, @$cari);
		// // print_r("<pre>"); print_r($record); die();

		// $data = [
		// 	'title' 		         => 'Daftar Karyawan',
		// 	'count_all_rsvp' 		 => $count_all_rsvp,
		// 	'count_hadir_rsvp' 		 => $count_hadir_rsvp,
		// 	'count_tidak_hadir_rsvp' => $count_tidak_hadir_rsvp,
		// 	'total_rows' 	=> $total_row,
		// 	'perpage' 		=> $SConfig->_admin_perpage,
		// 	'record' 		=> $record,
		// 	'hal_aktif' 	=> $hal_aktif,
		// 	'jumlah_hal' 	=> ceil($total_row/$SConfig->_admin_perpage),
		// ];

		$data =[
			'title' 		         => 'Dashboard',
		];

		$this->template->load('template_admin', set_url('dashboard'), $data);
	}


	

}

/* End of file Dashboard.php */
/* Location: ./application/modules/admin/controllers/Dashboard.php */