<?php 

 defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function($param ='')
	{

		$data['tanggal'] = '17 Oktober 2018';
		$data['ketua'] = 'Yoga Sumadewa, M.Sn';
		$data['tambahan'] = $param;



		$this->load->view('v_pengumuman', $data);
		
	}

	public function detail()
		{
			$data['judul'] = 'Detail Pengumuman';


			$this->load->view('v_detail', $data);
		}



	

}