<?php

class Pemasukan extends CI_Controller {

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
        $data['pemasukan'] = $this->induk->pemasukan(); //Meload semua data yang ada di model induk dengan fungsi pemasukan
        $data['lihatpemasukan'] = $this->induk->lihatpemasukan();
        $this->load->view('admin/pemasukan', $data);
	}
	function delete(){
	 	$nomor = $_GET['kode'];
	 	$this->load->model('induk');
	 	$this->induk->deletepemasukan($nomor);

	}

}
?>