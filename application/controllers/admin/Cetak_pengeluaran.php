<?php

class Cetak_pengeluaran extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}

		$this->load->helper('text');
	}
	public function index() {
		
      	 $data = array(
			'username' => $this->session->userdata('username'),
			'tanggalmulai' => $this->input->post('tanggalmulai', TRUE),
			'tanggalsampai' => $this->input->post('tanggalsampai', TRUE)
			);
		
		$this->load->model('induk');
        $data['cetak_pengeluaran'] = $this->induk->cetak_pengeluaran(); //Meload semua data yang ada di model induk dengan fungsi pemasukan
        $this->load->view('admin/cetak_pengeluaran', $data);
	}
	public function cetak(){
        ob_start();
        $data = array(
			'username' => $this->session->userdata('username'),
			'tanggalmulai' => $this->input->get('tanggalmulai', TRUE),
			'tanggalsampai' => $this->input->get('tanggalsampai', TRUE)
			);
        $this->load->model('induk');
        $data['cetak_pengeluaran_cetak'] = $this->induk->cetak_pengeluaran_cetak(); //Meload semua data yang ada di model induk dengan fungsi pemasukan
        $this->load->view('admin/cetak_pengeluaran_cetak', $data);
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/htmltopdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data pemasukan.pdf', 'V');
    }

}
?>