<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Fungsi {

	function is_logged_in(){
		$_this =& get_instance();
		$user_session = $_this->session->userdata;

		if($this->side == 'staf'){
			if(!isset($user_session['logged_in']) && !isset($user_session['id_staf']) ){
				// print_r($_SESSION['id_superadmin']); die();
				$data = [
                        'id_admin',
                        'jenis_admin',
                        'logged_in'
                    ];
                $_this->session->unset_userdata($data);
                $_this->session->set_flashdata('danger', 'Maaf, anda harus login terlebih dahulu');
				redirect('staf');
			}
		}elseif($this->side == 'admin'){
			if( !isset($user_session['logged_in']) && !isset($user_session['id_mahasiswa']) && !isset($user_session['id_registrasi_mahasiswa']) && !isset($user_session['nim']) && !isset($user_session['nama_mahasiswa']) ){
				// $_this->session->sess_destroy();
				$data = [
	                        'id_mahasiswa',
	                        'id_registrasi_mahasiswa',
	                        'nim',
	                        'nama_mahasiswa',
	                        'logged_in',
	                    ];
                $_this->session->unset_userdata($data);
                $_this->session->set_flashdata('danger', 'Maaf Anda Belum Login');
                redirect(site_url());
			}
		}else{
			if( !isset($user_session['logged_in']) ){
				$_this->session->sess_destroy();
				$cookie = explode(";", @$_SERVER['HTTP_COOKIE']);
				foreach ($cookie as $key => $value) {
					$pecah_cookie = explode("=" , $value)[0];
					if($pecah_cookie != "ci_session"){
						set_cookie($pecah_cookie, '', time()-3600);
					}
				}
				redirect('auth');
			}
		}
	}

	function user_data(){
		$_this =& get_instance();
		if($this->side == 'staf'){
			$_this->load->model('staf/staf_model');
			$id 		= $_this->session->userdata('id_staf');
			$user_data 	= $_this->staf_model->get_by(['id_staf'=> $id], null, null, true);
		}else if($this->side == 'mitra'){
			$_this->load->model('mitra/mitra_model');
			
			$id 		= enkripsiDekripsi($_this->session->userdata('id_user_refferal'), 'dekripsi');
			$user_data  =  $_this->mitra_model->get($id, true);
		}
		return $user_data;

	}


	function check_exp_perusahaan(){
		$_this =& get_instance();
		if($this->side == 'admin'){
			$_this->load->model('admin/perusahaan_model');
			$user_data 	= $_this->perusahaan_model->get($_SESSION['kd_perusahaan'], true);

			// print_r($user_data->tgl_expired); die();
			
			if($user_data->tgl_expired < date('Y-m-d')){
				$_this->session->set_flashdata('danger', 'Maaf Paket anda telah habis, silahkan lanjutkan untuk berlanggan YesToDo kembali');
				redirect('admin/dashboard','refresh');
			}
		}
	}
}