<?php

class Pengeluaran extends CI_Controller {

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
        $data['pengeluaran'] = $this->induk->pengeluaran(); //Meload semua data yang ada di model induk dengan fungsi pengeluaran
        $data['lihatpengeluaran'] = $this->induk->lihatpengeluaran();
        $this->load->view('admin/pengeluaran', $data);
	}
	function delete(){
	 	$nomor = $_GET['kode'];
	 	$this->load->model('induk');
	 	$this->induk->deletepengeluaran($nomor);

	}

}
?>