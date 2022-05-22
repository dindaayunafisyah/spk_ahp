<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$data['title'] = 'dashboard';
		$this->load->view('admin/tamplate/header', $data);
		$this->load->view('admin/tamplate/sidebar', $data);
		$this->load->view('admin/tamplate/pageheading', $data);
		$this->load->view('admin/tamplate/footer', $data);
	}
}
