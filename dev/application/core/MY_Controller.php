<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    //public $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','fungsi','file','security'));
        $this->load->library(array('session','form_validation','fungsi', 'template'));
        // echo "<h1>test</h1>";

        // redirect('backend/dashboard','refresh');
        
    }


    public $mesage = [
		'required'		=> '%s Harus Diisi',
		'is_unique'		=> '%s Sudah Digunakan',
		'min_length'	=> 'Karakter %s terlalu pendek',
		'max_length'	=> 'Karakter %s terlalu pendek',
		'matches'		=> '%s tidak sama',
        'numeric'       => '%s hanya bisa diisi angka',
        'valid_email'   => '%s yang diisi format nya salah',
	];


    public $config_email = [
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'smtp',
        'smtp_host' => 'smtp.gmail.com',
        // 'smtp_user' => 'gosalimiquel777@gmail.com',  // Email gmail yestodoapps@gmail.com
        'smtp_user' => 'yestodoapps@gmail.com',  // Email gmail yestodoapps@gmail.com
        // 'smtp_pass'   => 'miquelgosali140970',  // Password gmail 10juni2021
        'smtp_pass'   => '10juni2021',  // Password gmail 10juni2021 
        'smtp_crypto' => 'ssl',
        'smtp_port'   =>465,
        'smtp_timeout' => '4',
        'crlf'    => "\r\n",
        'newline' => "\r\n"
    ];


    protected function borderStyle(){
        return array(
            'borders' => array(
                'allBorders' => array(
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color' => array('argb' => '00000000'),
                ),
            ),
        );
    }

    protected function header($size = 12, $bold = true){
        return array(
            'font' => array(
                'bold' => $bold,
                'size' => $size
            ),
            'alignment' => array(
                'horizontal' => "center",
            ),
        );
    }

    protected function setFont($size = 12, $bold = false, $alignment = "left"){
        return array(
            'font' => array(
                'bold' => $bold,
                'size' => $size
            ),
            'alignment' => array(
                'horizontal' => $alignment,
            ),
        );
    }

    protected function dataAlign($align){
        return array(
            'alignment' => array(
                'horizontal' => $align,
            ),
        );
    }

}