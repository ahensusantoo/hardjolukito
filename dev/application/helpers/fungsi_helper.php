<?php

	function set_url($sub){
		$_this =& get_instance();
		if($_this->fungsi->side == 'staf'){
			return ('staf/'.$sub);
		}elseif($_this->fungsi->side == 'admin'){
			return ('admin/'.$sub);
		}else{
			return ($sub);
		}		
	}

	function indo_currency($nominal){
		$result = number_format($nominal, 0, ',', '.');
		return $result;
	}


	function nomor_plus_62($no_hp){
        $hq_telepon = ltrim($no_hp, '+');
        $hq_telepon = ltrim($hq_telepon, '62');
        $hq_telepon = ltrim( $hq_telepon, '0');
        $hq_telepon = "+62".$hq_telepon;
        return $hq_telepon;
    }


	function get_extension($string=''){
		$a = explode('.', $string);
	    $b = array_reverse($a);
	    return ".".$b[0];
	}

	function indo_date($date){
		$d = substr($date,8,2);
		$m = substr($date,5,2);
		$y = substr($date,0,4);
		return $d.'-'.$m.'-'.$y;
	}

	function date_month_name($date){
		if($date == ""){
			return $date;
		}else{
			return date_format(date_create(trim($date)),'d F Y');
		}
	}
	
	function random_string($kata = 8){
		$pool = '1234567890abcdefghijkmnpqrstuvwxyz';
	
		$token = '';
		for ($i = 0; $i < $kata; $i++){
		$token .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		return $token; 
	}

	function just_number($number){
	    return preg_replace("/[^A-Za-z0-9]/", "",$number);
	}
	
    function createSlug($str){
        $delimiter = '-';
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
        
        } 

    function get_api($url){ 
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
    
        //mengaembalikan data, menggunakan true return dalam bentuk array, tanpa true return dalam bentuk objeck
        return json_decode($result);
    }

    function pagination($jml_halaman, $hal_aktif, $link_paginaton){
		//PREV BUTTON
   
	   	if ((int)$hal_aktif == "1") {
		   	$html = '<li class="page-item"><a disabled class="page-link" data-abc="true"><i class="fa fa-angle-left"></i></a></li>';
	   	}else{
		   	$html = '<li class="page-item"><a class="page-link" href="'.$link_paginaton.'&page='. ($hal_aktif-1).'" data-abc="true"><i class="fa fa-angle-left"></i></a></li>';
	   	}
		   
	   	//PAGE PREV 
	   	if ((int)$hal_aktif > 1){
		   	for ($i=(int)$hal_aktif-2; $i < (int)$hal_aktif; $i++) { 
			   	if ((int)$i < (int)$hal_aktif && (int)$i > 0) {
					$html = @$html.'<li class="page-item"><a class="page-link" href="'.$link_paginaton.'&page='.$i.'" data-abc="true">'.$i.'</a></li>';
			   	}
		   	}
	   	} 
		   
	   	//PAGE ACTIVE
	   	$html = @$html.'<li class="page-item active"><a href="javascript:void(0)" disabled class="page-link">'.$hal_aktif.'</a></li>';

	   	//PAGE NEXT    
	   	if ((int)$hal_aktif < (int)$jml_halaman){
		   	for ($i= (int)$hal_aktif+1; $i < (int)$hal_aktif+3; $i++) { 
			   	if ($i > (int)$hal_aktif && $i <= (int)$jml_halaman) {
				   	$html = @$html.'<li class="page-item"><a class="page-link" href="'.$link_paginaton.'&page='.$i.'" data-abc="true">'.$i.'</a></li>';
			   	}
		   	}
	   	} 
	   	
	   	//NEXT BUTTON
	   	if ( (int)$hal_aktif == (int)$jml_halaman){
		   	$html = @$html.'<li class="page-item"><a disabled class="page-link" data-abc="true"><i class="fa fa-angle-right"></i></a></li>';
	   	}else{
		   	$html = @$html.'<li class="page-item"><a class="page-link" href="'.$link_paginaton.'&page='.($hal_aktif+1).'" data-abc="true"><i class="fa fa-angle-right"></i></a></li>';
	   	}

	   	return $html;
   	}

    function smart_resize_image($file, $width = 0, $height = 0, $proportional = false, $quality = 100) {

		$string             = null;
		$output             = 'file'; 
		$delete_original    = true;
		$use_linux_commands = false;


		if ( $height <= 0 && $width <= 0 ) return false;
		if ( $file === null && $string === null ) return false;

		# Setting defaults and meta
		$info                         = $file !== null ? getimagesize($file) : getimagesizefromstring($string);
		$image                        = '';
		$final_width                  = 0;
		$final_height                 = 0;
		list($width_old, $height_old) = $info;
		$cropHeight = $cropWidth = 0;

		# Calculating proportionality
		if ($proportional) {
			if      ($width  == 0)  $factor = $height/$height_old;
			elseif  ($height == 0)  $factor = $width/$width_old;
			else                    $factor = min( $width / $width_old, $height / $height_old );

			$final_width  = round( $width_old * $factor );
			$final_height = round( $height_old * $factor );
		}
		else {
			$final_width = ( $width <= 0 ) ? $width_old : $width;
			$final_height = ( $height <= 0 ) ? $height_old : $height;
			$widthX = $width_old / $width;
			$heightX = $height_old / $height;

			$x = min($widthX, $heightX);
			$cropWidth = ($width_old - $width * $x) / 2;
			$cropHeight = ($height_old - $height * $x) / 2;
		}

		# Loading image to memory according to type
		switch ( $info[2] ) {
			case IMAGETYPE_JPEG:  $file !== null ? $image = imagecreatefromjpeg($file) : $image = imagecreatefromstring($string);  break;
			case IMAGETYPE_GIF:   $file !== null ? $image = imagecreatefromgif($file)  : $image = imagecreatefromstring($string);  break;
			case IMAGETYPE_PNG:   $file !== null ? $image = imagecreatefrompng($file)  : $image = imagecreatefromstring($string);  break;
			default: return false;
		}


		# This is the resizing/resampling/transparency-preserving magic
		$image_resized = imagecreatetruecolor( $final_width, $final_height );
		if ( ($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG) ) {
			$transparency = imagecolortransparent($image);
			$palletsize = imagecolorstotal($image);

			if ($transparency >= 0 && $transparency < $palletsize) {
				$transparent_color  = imagecolorsforindex($image, $transparency);
				$transparency       = imagecolorallocate($image_resized, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue']);
				imagefill($image_resized, 0, 0, $transparency);
				imagecolortransparent($image_resized, $transparency);
			}
			elseif ($info[2] == IMAGETYPE_PNG) {
				imagealphablending($image_resized, false);
				$color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
				imagefill($image_resized, 0, 0, $color);
				imagesavealpha($image_resized, true);
			}
		}
		imagecopyresampled($image_resized, $image, 0, 0, $cropWidth, $cropHeight, $final_width, $final_height, $width_old - 2 * $cropWidth, $height_old - 2 * $cropHeight);


		# Taking care of original, if needed
		if ( $delete_original ) {
			if ( $use_linux_commands ) exec('rm '.$file);
			else @unlink($file);
		}

		# Preparing a method of providing result
		switch ( strtolower($output) ) {
			case 'browser':
			$mime = image_type_to_mime_type($info[2]);
			header("Content-type: $mime");
			$output = NULL;
			break;
			case 'file':
			$output = $file;
			break;
			case 'return':
			return $image_resized;
			break;
			default:
			break;
		}

		# Writing image according to type to the output destination and image quality
		switch ( $info[2] ) {
			case IMAGETYPE_GIF:   imagegif($image_resized, $output);    break;
			case IMAGETYPE_JPEG:  imagejpeg($image_resized, $output, $quality);   break;
			case IMAGETYPE_PNG:
			$quality = 9 - (int)((0.9*$quality)/10.0);
			imagepng($image_resized, $output, $quality);
			break;
			default: return false;
		}

		return true;
	}


	function bulanAbjad($bulan){
	   switch ($bulan) {
	     case "1":
	       return 'Januari';
	       break;
	     case "2":
	       return 'Februari';
	       break;
	     case "3":
	       return 'Maret';
	       break;
	     case "4":
	       return 'April';
	       break;
	     case "5":
	       return 'Mei';
	       break;
	     case "6":
	       return 'Juni';
	       break;
	     case "7":
	       return 'Juli';
	       break;
	     case "8":
	       return 'Agustus';
	       break;
	     case "9":
	       return 'September';
	       break;
	     case "10":
	       return 'Oktober';
	       break;
	     case "11":
	       return 'November';
	       break;
	     case "12":
	       return 'Desember';
	       break;


	     default:
	       return 'Bulan tidak terdaftar';
	   }
	}
	
   
	function antiSqli($string){
		$_this =& get_instance();
		return $_this->db->escape_str($string);
	}

	function enkripsiDekripsi( $string, $action ) {
        // you may change these values to your own
        $secret_key = '15saf fsFed5&sda6v Pkfasbdu asUK@';
        $secret_iv = '1597864002563154';
    
        $output = false;
        $encrypt_method = 'AES-256-CBC';
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    
        if( $action == 'enkripsi' ) {
            $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
        }
        else if( $action == 'dekripsi' ){
            $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        }
    
        return $output;
    }

    function createUnicode($id_primary){
    	$tgl_ymd = substr($id_primary, 4,6);
	    $tgl_d = date_format(date_create($tgl_ymd),"d");
	    $tgl_y = date_format(date_create($tgl_ymd),"y");
	    $tgl_m = date_format(date_create($tgl_ymd),"m");
	    $num = round(substr($id_primary, 10));
	    $random_word = substr(str_shuffle("WERTUPLKHFAXCVBNM"), 0, 1);
	    
	    switch ($tgl_m) {
	        case '1' : $bulan_enc = "A"; break;
	        case '2' : $bulan_enc = "L"; break;
	        case '3' : $bulan_enc = "E"; break;
	        case '4' : $bulan_enc = "P"; break;
	        case '5' : $bulan_enc = "Z"; break;
	        case '6' : $bulan_enc = "M"; break;
	        case '7' : $bulan_enc = "F"; break;
	        case '8' : $bulan_enc = "K"; break;
	        case '9' : $bulan_enc = "W"; break;
	        case '10' : $bulan_enc = "U"; break;
	        case '11' : $bulan_enc = "X"; break;
	        case '12' : $bulan_enc = "N"; break;
	    }
	    
	    $createRefferalID = $bulan_enc.$tgl_y.$num.$random_word.$tgl_d;
	    
	    return $createRefferalID;
    }

    function create_kode_refferal($id_primary){
    	$tgl_ymd = substr($id_primary, 4,6);
	    $tgl_d = date_format(date_create($tgl_ymd),"d");
	    $tgl_y = date_format(date_create($tgl_ymd),"y");
	    $tgl_m = date_format(date_create($tgl_ymd),"m");
	    $num = round(substr($id_primary, 10));
	    $random_word = substr(str_shuffle("WERTUPLKHFAXCVBNM"), 0, 1);
	    
	    switch ($tgl_m) {
	        case '1' : $bulan_enc = "R"; break;
	        case '2' : $bulan_enc = "C"; break;
	        case '3' : $bulan_enc = "E"; break;
	        case '4' : $bulan_enc = "T"; break;
	        case '5' : $bulan_enc = "S"; break;
	        case '6' : $bulan_enc = "Z"; break;
	        case '7' : $bulan_enc = "F"; break;
	        case '8' : $bulan_enc = "K"; break;
	        case '9' : $bulan_enc = "B"; break;
	        case '10' : $bulan_enc = "U"; break;
	        case '11' : $bulan_enc = "X"; break;
	        case '12' : $bulan_enc = "Y"; break;
	    }
	    
	    $createRefferalID = $bulan_enc.$tgl_y.$num.$random_word.$tgl_d;
	    
	    return $createRefferalID;
    }

	function makeID($search, $table, $kode){
		  // CREATE ID
		$ci =& get_instance();
		// $ci->load->database();
		$sql = "SELECT max($search) as maxKode FROM $table";
		$id_primary = $ci->db->query($sql)->row();
		$id_primary = $id_primary->maxKode;

		if(substr($id_primary, 2, 8) != date('Ymd')){
			$noUrut = 0;
		} else {
		    $noUrut = (int) substr($id_primary, 10, 10);
		    if($noUrut == 9999999999){ $noUrut = 0; } 
		    else { $noUrut++; }
	  	}
  		$id_primary = $kode . date('Ymd') . sprintf("%010s", $noUrut);
		return $id_primary;
		// END CREATE ID
	}
	

	function spinnerMemuat(){
		return '
			<center><div class="spinner-border spinner-border-sm text-primary" role="status"></div> Memuat</center>
		';
	}

	function spinnerMohonTunggu(){
		return '
			<center><div class="spinner-border spinner-border-sm text-info" role="status"></div> Mohon Tunggu</center>
		';
	}


	function bulanKeHuruf($kode){
	    switch ($kode) {
            case "01":
                return "A";
            break;
            case "02":
                return "S";
            break;
            case "03":
                return "D";
            break;
            case "04":
                return "F";
            break;
            case "05":
                return "G";
            break;
            case "06":
                return "H";
            break;
            case "07":
                return "J";
            break;
            case "08":
                return "K";
            break;
            case "09":
                return "L";
            break;
            case "10":
                return "Z";
            break;
            case "11":
                return "X";
            break;
            case "12":
                return "C";
            break;
            
            default:
            return "N";
        }
	}

	function angkaKeHari($kode){
	    switch ($kode) {
            case "1":
                return "Senin";
            break;
            case "2":
                return "Selasa";
            break;
            case "3":
                return "Rabu";
            break;
            case "4":
                return "Kamis";
            break;
            case "5":
                return "Jum'at";
            break;
            case "6":
                return "Sabtu";
            break;
            case "7":
                return "Minggu";
            break;
            
            default:
            return "Hari tidak diketahui";
        }
	}

	function jenis_kelamin($kode){
	    switch ($kode) {
            case "L":
                return "Laki-Laki";
            break;
            case "P":
                return "Perempuan";
            break;
            
            default:
            return "-";
        }
	}

	function jenis_matkul($kode){
	    switch ($kode) {
            case "A":
                return "Wajib";
            break;
            case "B":
                return "Pilihan";
            break;
            case "C":
                return "Wajib peminatan";
            break;
            case "D":
                return "Pilihan Peminatan";
            break;
            case "S":
                return "Tugas Akhir/Skripsi/Tesis/Disertasi";
            break;
            
            default:
            return "Belum Ada Pilihan";
        }
	}

	function kelompok_matkul($kode){
	    switch ($kode) {
	        case "A":
	            $text = "MPK";
	            break;
	        case "B":
	            $text = "MKK";
	            break;
	        case "C":
	            $text = "CMK";
	            break;
	        case "D":
	            $text = "MPB";
	            break;
	        case "E":
	            $text = "MBB";
	            break;
	        case "F":
	            $text = "MKU/MKDU";
	            break;
	        case "G":
	            $text = "MKDK";
	            break;
	        case "H":
	            $text = "MKK";
	            break;
	        default:
	            $text = "Tidak Diketahui";
	            break;
	    }
	    return $text;
	}

	function status_pernikahan($kode){
	    switch ($kode) {
	        case "1":
	            $text = "Lajang";
	            break;
	        case "2":
	            $text = "Menikah";
	            break;
	        case "3":
	            $text = "Cerai Hidup";
	            break;
	        case "4":
	            $text = "Cerai Mati";
	            break;
	        default:
	            $text = "Tidak Diketahui";
	            break;
	    }
	    return $text;
	}
	


	function tanggal_indo($tanggal_sblm){
		$tanggal = date("Y-m-j", strtotime($tanggal_sblm));

		$bulan = array (1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		$split = explode('-', $tanggal);
		return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	}

	function tanggal_jam_indo($tanggal_sblm){
		$tanggal = date("Y-m-j", strtotime($tanggal_sblm));

		$bulan = array (1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		$split = explode('-', $tanggal);
		return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0] . ', ' . date("G:i:s", strtotime($tanggal_sblm)). " WIB";
	}

    function tanggal_order($tanggal_sblm){
    	return date("YmdHis", strtotime($tanggal_sblm));
    }
    
    function jam_indo($tanggal_sblm){
    	return date("G:i", strtotime($tanggal_sblm));
    }
    
    
    

    