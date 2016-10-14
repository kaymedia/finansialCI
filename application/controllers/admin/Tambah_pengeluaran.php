<?php

class Tambah_pengeluaran extends CI_Controller {

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
        $this->load->view('admin/tambah_pengeluaran', $data);
	}
	function tambah() {

		$tanggal = $this->input->post('tanggal');
		$jumlah = $this->input->post('jumlah');
		$keterangan = $this->input->post('keterangan');
		$this->load->model('induk');
		$this->induk->tambah_pengeluaran($tanggal, $jumlah, $keterangan);
		
	}

}
?>