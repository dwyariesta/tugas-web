<?php 


class Home extends CI_Controller
{
	
	public function index()
	{
	//	echo "Admin / home";
		$data['judul'] = 'dashboard';
		$data['sub_judul'] = 'halaman utama';
		$data['halaman'] = 'admin/v_index';


		$this->load->view('admin/v_tamplate',$data);
	}

	public function coba()
{

	$data['judul'] = 'coba';
	$data['sub_coba'] = 'halaman coba';
	$data['halaman'] = 'admin/v_coba';

	$this->load->view('admin/v_tamplate',$data);

}
	}






 