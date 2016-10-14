<?php

class Index extends CI_Controller {

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
        $data['pemasukanindex'] = $this->induk->pemasukanindex(); //Meload semua data yang ada di model induk dengan fungsi pemasukan
        $data['pengeluaranindex'] = $this->induk->pengeluaranindex();
        $this->load->view('admin/index', $data);
		

	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>