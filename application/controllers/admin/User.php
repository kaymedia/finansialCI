<?php

class User extends CI_Controller {

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
        $data['user'] = $this->induk->user(); //Meload semua data yang ada di model induk dengan fungsi user
        $data['lihatuser'] = $this->induk->lihatuser(); //Meload semua data yang ada di model induk dengan fungsi user
        $this->load->view('admin/user', $data);
	}
	 function delete(){
	 	$id = $_GET['id'];
	 	$this->load->model('induk');
	 	$this->induk->deleteuser($id);

	}

}
?>