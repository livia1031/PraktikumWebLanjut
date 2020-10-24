<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	
	//--------------------------------------------------------------------
	public function show()
	{
		$data['judul']='Mahasiswa';
		$data['nama']='Livia Ayu Istoria Hernani';
		$data['npm']='1817051031';
		echo view('mahasiswa/header', $data);
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer');
	}

	//--------------------------------------------------------------------


}