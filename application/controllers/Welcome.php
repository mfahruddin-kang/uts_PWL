<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['contents'] = 'admin/dashboard';
		$this->load->view('templates/index',$data);
	}
	public function profil()
	{
		$data['contents'] = 'admin/profil';
		$this->load->view('templates/index',$data);
	}
	public function dt_barang()
	{
		$data['contents'] = 'admin/dt_barang';
		$this->load->view('templates/index',$data);
	}
	public function entry_penjualan()
	{
		$data['contents'] = 'admin/entry_penjualan';
		$this->load->view('templates/index',$data);
	}
	public function foto()
	{
		$data['contents'] = 'admin/g_foto';
		$this->load->view('templates/index',$data);
	}
	public function pass()
	{
		$data['contents'] = 'admin/g_pass';
		$this->load->view('templates/index',$data);
	}
}
