<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edom_model extends MY_Model {

	protected $_table_name 		= 'edom';
	protected $_primary_key 	= 'id_edom';
	protected $_order_by 		= 'dibuat_tgl_edom';
	protected $_order_by_type 	= 'desc';


	public $rules_edom = [
			'kelompok' => [
				'field' => 'kelompok',
				'label' => 'Kelompok',
				'rules' => 'trim|xss_clean|max_length[2]|required'
			],
			'pertanyaan' => [
				'field' => 'pertanyaan',
				'label' => 'Pertanyaan',
				'rules' => 'trim|xss_clean|max_length[200]|required'
			],
			
		];

	function get_hasil($id_periode, $id_dosen){
		$string = "SELECT 
					k.nama_kelas, mk.nama_matkul, p.nama_program_studi,
					SUM(case ej.jawaban when '1' then 1 else 0 end) AS sb,
					SUM(case ej.jawaban when '2' then 1 else 0 end) AS b,
					SUM(case ej.jawaban when '3' then 1 else 0 end) AS n,
					SUM(case ej.jawaban when '4' then 1 else 0 end) AS m,
					SUM(case ej.jawaban when '5' then 1 else 0 end) AS sm,
					COUNT(DISTINCT ej.fk_mahasiswa) as jml_mhs_isi,
					(SELECT COUNT(*) FROM kelas_mahasiswa km2 WHERE km2.status_hapus_kls_mhs='0' AND km2.fk_kelas=k.id_kelas ) AS jml_semua

					FROM kelas k 
					JOIN kelas_dosen kd ON k.id_kelas=kd.fk_kelas
					JOIN mata_kuliah mk ON k.fk_matkul = mk.id_matkul
					JOIN prodi p ON k.fk_prodi = p.id_prodi
					LEFT JOIN edom_jawaban ej ON k.id_kelas=ej.fk_kelas AND ej.fk_dosen=kd.fk_dosen WHERE kd.fk_dosen='$id_dosen' 
						AND k.fk_periode='$id_periode'
					    AND kd.status_hapus_kelas_dosen = false
					GROUP BY k.id_kelas";
		// echo $string; die();
		return $this->db->query($string);
	}

}

/* End of file Edom_model.php */
/* Location: ./application/modules/staf/models/Edom_model.php */