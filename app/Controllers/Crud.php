<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Crud extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Lihat Data Mahasiswa',
            'h1'        => 'Lihat Data Mahasiswa'
        ];

        echo view("header",$data);
        echo view("lihatdata_view");
        echo view("footer");
    }
}