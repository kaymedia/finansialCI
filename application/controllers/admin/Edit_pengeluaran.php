<?php

class Edit_pengeluaran extends CI_Controller {

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
        $data['editpengeluaran'] = $this->induk->editpengeluaran(); //Meload semua data yang ada di model induk dengan fungsi user
        $this->load->view('admin/edit_pengeluaran', $data);
	}
	function simpan() {

		$nomor = $this->input->post('nomor');
		$tanggal = $this->input->post('tanggal');
		$jumlah = $this->input->post('jumlah');
		$keterangan = $this->input->post('keterangan');
		$this->load->model('induk');
		$this->induk->updatepengeluaran($nomor, $tanggal, $jumlah, $keterangan);
		
	}

}
?>