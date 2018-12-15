<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class dosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen_model');
	}
	public function index()
	{
		$data['judul'] = 'dosen';
		$data['sub_judul'] = 'Halaman dosen';
		$data['halaman'] = 'admin/v_dosen';
		$data['isi_table'] = $this->Dosen_model->all();

		$this->load->view('admin/v_tamplate',$data);
	}

	public function tambah(){
		$data['judul'] = 'dosen';
		$data['sub_judul'] = 'Halaman tambah data dosen';
		$data['halaman'] = 'admin/v_dosen_tambah';
		$data['isi_table'] = $this->Dosen_model->all();

		$this->load->view('admin/v_tamplate',$data);
	}

	public function proses_tambah(){
		$nik = $this->input->post('nik');
		$nama_dosen = $this->input->post('nama_dosen');
		$alamat = $this->input->post('alamat');

		$objek = array(
			'nik' => $nik,
			'nama_dosen' => $nama_dosen,
			'alamat' => $alamat );

		if ($this->Dosen_model->create($objek)) {
	
			$this->session->set_flashdata('info', 'data berasil disimpan !');
			redirect('admin/dosen');
		}else{
	
			$this->session->set_flashdata('info', 'data gagal disimpan !');
			redirect('admin/dosen');
		}

	}

}