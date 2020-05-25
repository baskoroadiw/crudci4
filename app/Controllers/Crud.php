<?php namespace App\Controllers;
use App\Models\mahasiswa_model;
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

    public function getData(){
        $model = new mahasiswa_model();

        echo json_encode($model->getMahasiswa()->getResult());
    }

    public function tambahData(){
        $model = new mahasiswa_model();
        $data = array(
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama')
        );
        $model->insertMahasiswa($data);

        echo json_encode(array('status'=>'sukses'));
    }
}