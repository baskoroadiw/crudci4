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

    public function tambahdata()
    {
        $data = [
            'title'     => 'Tambah Data Mahasiswa',
            'h1'        => 'Tambah Data Mahasiswa'
        ];

        echo view("header",$data);
        echo view("tambahdata_view");
        echo view("footer",$data);
    }

    public function tambah()
    {
        $model = new Mahasiswa_model();

        $data_form = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama')
        ];

        $model->insertMahasiswa($data_form);

        return redirect()->to("/crud");
    }

    public function editdata($nim)
    {
        $model = new Mahasiswa_model();

        $data = [
            'title'     => 'Edit Data Mahasiswa',
            'h1'        => 'Edit Data Mahasiswa',
            'getEdit'  =>  $model->getMahasiswa($nim)->getRow()
        ];

        echo view("header",$data);
        echo view("editdata_view",$data);
        echo view("footer",$data);
    }
}