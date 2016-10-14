<?php

class Edit_user extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}

		$this->load->helper('text');
	}
	public function index() {
		
      	 $data = array(
			'username' => $this->session->userdata('username')
			);
	
		$this->load->model('induk');
        $data['edituser'] = $this->induk->edituser(); //Meload semua data yang ada di model induk dengan fungsi user
        $this->load->view('admin/edit_user', $data);
	}
	function simpan() {

		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$provinsi = $this ->input->post('provinsi');
		$hp = $this->input->post('hp');
		$this->load->model('induk');
		$this->induk->updateuser($id, $username, $password, $nama, $alamat, $kota, $provinsi, $hp);
		
	}

}
?>