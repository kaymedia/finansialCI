<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function cek_user(){ //menyimpan inpputan dari browser
		$data = array('username' => $this->input->post('username', TRUE) ,
					  'password' => md5($this->input->post('password', TRUE))
					  );
		$this->load->model('login'); // load perintah yang ada di folder model
		$hasil = $this->login->cek_login($data);
		if($hasil->num_rows() == 1){
		
		$x= $this->session->set_userdata($data);	
		redirect('admin/index');
		
		}
		else
		{
			echo "<script>alert('Username atau password salah !');history.go(-1);</script>";
		}


	}
}
