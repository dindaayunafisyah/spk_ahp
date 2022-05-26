<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'dashboard';
		$this->load->view('manajer/tamplate/header', $data);
		$this->load->view('manajer/tamplate/sidebar', $data);
		$this->load->view('manajer/tamplate/pageheading', $data);
		$this->load->view('manajer/tamplate/footer', $data);
	}
}
