<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Mahasiswa_model;

class Crud extends Controller
{
    public function index()
    {
        $model = new Mahasiswa_model();

        $data = [
            'data_mhs'  => $model->getMahasiswa()->getResult()
        ];

        echo view("lihatdata_view",$data);
    }

    public function tambahdata()
    {
        echo view("tambahdata_view");
    }

    public function tambah()
    {
        $model = new Mahasiswa_model();

        $data_form = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama')
        ];

        $ruleValidator = [
            'nim' => [
                'label'  => 'NIM',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'nama' => [
                'label'  => 'Nama',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ]
        ];

        if (! $this->validate($ruleValidator))
        {
            session()->setFlashdata('nim-error', $this->validator->getError('nim'));
            session()->setFlashdata('nama-error', $this->validator->getError('nama'));
            return redirect()->to("/tambahdata");
        }
        else
        {
            $model->insertMahasiswa($data_form);
            return redirect()->to("/");
        }
    }

    public function editdata($nim)
    {
        $model = new Mahasiswa_model();

        $data = [
            'getEdit'  =>  $model->getMahasiswa($nim)->getRow()
        ];

        echo view("editdata_view",$data);
    }

    public function edit($id)
    {
        $model = new Mahasiswa_model();

        $data_form = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama')
        ];

        $ruleValidator = [
            'nim' => [
                'label'  => 'NIM',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ],
            'nama' => [
                'label'  => 'Nama',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi'
                ]
            ]
        ];

        if (! $this->validate($ruleValidator))
        {
            session()->setFlashdata('nim-error', $this->validator->getError('nim'));
            session()->setFlashdata('nama-error', $this->validator->getError('nama'));
            return redirect()->to("/editdata/".$id);
        }
        else
        {
            $model->editMahasiswa($data_form,$id);
            echo '<script>alert("Update Berhasil"); window.location.href="/";</script>';
        }
    }

    public function hapus($id)
    {
        $model = new Mahasiswa_model();

        $edit = $model->hapusMahasiswa($id);

        if ($edit){
            echo '<script>alert("Berhasil Menghapus"); window.location.href="/";</script>';
        }
    }
}