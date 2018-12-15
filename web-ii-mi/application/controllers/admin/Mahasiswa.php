<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}
	public function index()
	{
		$data['judul'] = 'Mahasiswa';
		$data['sub_judul'] = 'Halaman Mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa';
		$data['isi_table'] = $this->mahasiswa_model->all();

		$this->load->view('admin/v_tamplate',$data);

	}
	public function tambah()
	{
		$data['judul'] = 'Mahasiswa';
		$data['sub_judul'] = 'Halaman tambah data mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa_tambah';
		$data['isi_table'] = $this->mahasiswa_model->all();

		$this->load->view('admin/v_tamplate',$data);
}
	
	
}