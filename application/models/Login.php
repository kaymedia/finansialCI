<?php defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Model{
	public function cek_login($data) {
		$perintah = $this->db->get_where('user', $data);
		return $perintah;
	}
}