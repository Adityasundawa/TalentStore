<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
	 $data = array('title' => 'Beranda', );
	$this->load->view('template/head', $data, FALSE);
	$this->load->view('template/topbar', $data, FALSE);
	$this->load->view('user/blank', $data, FALSE);
	$this->load->view('template/footer', $data, FALSE);
	}
	public function login()
	{
	 $data = array('title' => 'Beranda', );
	$this->load->view('template/head', $data, FALSE);
	$this->load->view('template/topbar', $data, FALSE);
	$this->load->view('user/login', $data, FALSE);
	$this->load->view('template/footer', $data, FALSE);
	}
	


}

/* End of file Beranda.php */
/* Location: ./application/controllers/user/Beranda.php */