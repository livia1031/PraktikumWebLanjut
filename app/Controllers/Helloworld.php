<?php 

namespace App\Controllers;

class Helloworld extends BaseController
{
	public function index()
	{
        echo $this->nama;
		//echo "Livia Cantik";
    }
    public function show($nama, $npm)
	{
        echo $this->head . '<br>';
        echo $nama . '<br>';
        echo $npm . '<br>';
		echo "Livia Cantik";
	}
}