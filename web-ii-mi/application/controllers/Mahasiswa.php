<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		echo "ini controller";
	}

	public function profil()
	{
		echo "Nama : Dwi ariesta <br>";
		echo "NIM : 1700330033 <br>";
		echo "Email : dwiariesta96@gmail.com <br>";
		
	}
	public function dosen($param1=' ')
	{
		echo "Nama dosenku ".$param1;
	}
	public function krs($semester=' ',$matkul=' ')
	{
		echo " semester ke ".$semester." saya mengambil ".$matkul;
	}

	public function get_semester()
	{
		echo "Semester : 3";
	}

}

