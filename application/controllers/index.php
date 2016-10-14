<?php
defined('BASEPATH') OR exit ('Dilarang masuk sini !');
class Index extends CI_Controller {
	public function index() {
		$this->load->view('index');

	}
}