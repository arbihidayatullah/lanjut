<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function show()
	{
		$data['nama'] = 'ArbiH';
		$jurusan['jurusan'] = 'ilmu komputer';
		echo view('mahasiswa/header', $jurusan);
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer');
	}
}
