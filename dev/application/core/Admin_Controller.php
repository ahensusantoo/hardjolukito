<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('cookie'));
		$this->load->library(array());
		$this->load->model(array());


		$this->fungsi->side = 'admin';

		//check jika ada cookie saat login. bikin jadi session
		// if(!isset($_SESSION['id_anggota'])){
		// 	$superadmin = get_cookie('logged_in'); 
		// 	if(isset($superadmin) && $superadmin == true){
		// 		$id_anggota 		= get_cookie('id_anggota');
		// 		$username_anggota 	= get_cookie('username_anggota');
		// 		$password 			= get_cookie('password_anggota');
		// 		$logged_in 			= get_cookie('logged_in');
		// 		$level 				= get_cookie('level');
		// 		if(!empty($username_anggota && $password && $logged_in && $level)){
		// 			$data = [
  //                       'id_anggota' 		=> enkripsiDekripsi($id_anggota, 'dekripsi'),
  //                       'username_anggota' 	=> $username_anggota,
  //                       'level'  			=> $level,
  //                       'logged_in' 		=> $logged_in,
  //                   ];
  //                   $this->session->set_userdata($data);
		// 		}	
		// 	}	
		// }

		// check dlu ada session tidak, jika tidak ada logout;
		// $this->fungsi->is_logged_in();

	}//end

}