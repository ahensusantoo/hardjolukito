<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model(['anggota_model']);
	}

	public function index(){
		$data = [
			'title' => 'Form Login',
		];
		$this->load->view('auth', $data, FALSE);
	}


	function proses(){
		$post = $this->input->post(null, true);

		if(!isset($post['login_anggota'])){
			$this->session->set_flashdata('danger', 'Maaf permintaan anda tidak dapat di proses!!!');
			redirect(site_url(), 'refresh');
			die();
		}

		$username 		= antiSqli($post['username']);
		$password 	= antiSqli($post['password']);
		
		$anggota = $this->anggota_model->get_by(['status_rmv_anggota'=>false, 'username_anggota'=> $username], null, null, true);
		// print_r("<pre>"); print_r($anggota); die();
		if(empty($anggota)) {
			$this->session->set_flashdata('danger', 'Username/Password anda salah!!!');
			redirect(site_url('login'),'refresh');
		}
        if(!password_verify($password, $anggota->password_anggota)) {
        	$this->session->set_flashdata('danger', 'Username/Password anda salah!!!');
			redirect(site_url('login'),'refresh');
        }

		if($anggota->status_aktif_anggota == false){
			$this->session->set_flashdata('danger', 'Status akun anda sedang di non-aktifkan, silahkan hubungin anggota');
			redirect(site_url('login'),'refresh');
		}

		$data = [
            'id_anggota' 			=> $anggota->id_anggota,
            'username_anggota' 		=> $anggota->username_anggota,
            'nama_anggota' 			=> $anggota->nama_anggota,
            'level_anggota' 		=> $anggota->level_anggota,
            'foto_anggota' 			=> $anggota->foto_anggota,
            'logged_in' 			=> TRUE,
        ];

        $this->session->set_userdata($data);
    	redirect('admin/dashboard','refresh');
        
	}

	function logout(){
		$this->session->unset_userdata('id_anggota');
		$this->session->unset_userdata('username_anggota');
		$this->session->unset_userdata('nama_anggota');
		$this->session->unset_userdata('level_anggota');
		$this->session->unset_userdata('foto_anggota');
		$this->session->unset_userdata('logged_in');
	
		$this->session->set_flashdata('success', 'Berhasil Logout');
		redirect(site_url('login'),'refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/staf/controllers/Auth.php */