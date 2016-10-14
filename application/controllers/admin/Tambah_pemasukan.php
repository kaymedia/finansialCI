<?php

class Tambah_pemasukan extends CI_Controller {

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
        $this->load->view('admin/tambah_pemasukan', $data);
	}
	function tambah() {

		$tanggal = $this->input->post('tanggal');
		$jumlah = $this->input->post('jumlah');
		$keterangan = $this->input->post('keterangan');
		$this->load->model('induk');
		$this->induk->tambah_pemasukan($tanggal, $jumlah, $keterangan);
		
	}

}
?>