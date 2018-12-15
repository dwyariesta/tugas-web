<?php 


class pengumuman extends CI_controller 
{

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengumuman_model');
}
	public function index()

	{

		$data['judul'] = 'pengumuman';
		$data['sub_judul'] = 'halaman pengumuman';
		$data['halaman'] = 'admin/v_pengumuman';


		$data['isi_table']= $this->Pengumuman_model->all();
		

		$this->load->view('admin/v_tamplate',$data);

	}

	public function tambah()
	{

//	    echo "fungsi tambah";
		$data['judul'] = 'tambah pengumuman';
		$data['sub_judul'] = 'tambah halaman pengumuman';
		$data['halaman'] = 'admin/v_tambah_pengumuman';

//		$data['isi_table']= $this->Pengumuman_model->all();

		$this->load->view('admin/v_tamplate', $data);

	}
	public function proses_tambah(){
	$judul = $this->input->post('judul');
	$isi = $this->input->post('isi');
	$penulis = $this->input->post('penulis');

	$objek = array(
		'judul' => $judul,
		'isi' => $isi,
		'penulis' => $penulis );

	if ($this->Pengumuman_model->create($objek)) {
	
		$this->session->set_flashdata('info', 'data berasil disimpan !');
		redirect('admin/pengumuman');
	}else{
	
		$this->session->set_flashdata('info', 'data gagal disimpan !');
		redirect('admin/pengumuman');
	}
	

	// var_dump($objek);

	}
	public function hapus($kode)
	{
		if ($this->Pengumuman_model->remove($kode)){
			$this->session->set_flashdata('info', 'data berasil dihapus !');
			redirect('admin/pengumuman');

	}else{

	
		$this->session->set_flashdata('info', 'data gagal dihapus !');
		redirect('admin/pengumuman');
		}
	}
	public function edit($id)
	{
		echo "halaman edit";
	

	//	    echo "fungsi tambah";
		$data['judul'] = 'edit pengumuman';
		$data['sub_judul'] = 'edit halaman pengumuman';
		$data['halaman'] = 'admin/v_edit_pengumuman';

		$data['isi_data']=$this->Pengumuman_model->get_id($id);

//		var_dump($data);

		$this->load->view('admin/v_tamplate', $data);

	}

	public function proses_edit()

	{

		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');

		$id =$this->input->post('id_pengumuman');

	$objek = array(
		'judul' => $judul,
		'isi' => $isi,
		'penulis' => $penulis );

	if ($this->Pengumuman_model->update($id, $objek)) {
	
		$this->session->set_flashdata('info', 'data berasil disimpan !');
		redirect('admin/pengumuman');
	}else{
	
		$this->session->set_flashdata('info', 'data gagal disimpan !');
		redirect('admin/pengumuman');
	}
	
	}
}	



 