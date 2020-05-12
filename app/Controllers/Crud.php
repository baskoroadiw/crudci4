<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mahasiswa_model;

class Crud extends Controller
{
    public function index()
    {
        $model = new Mahasiswa_model();

        $data = [
            'title'     => 'Lihat Data Mahasiswa',
            'h1'        => 'Lihat Data Mahasiswa',
            'data_mhs'  => $model->getMahasiswa()->getResult()
        ];

        echo view("header",$data);
        echo view("lihatdata_view",$data);
        echo view("footer",$data);
    }
}