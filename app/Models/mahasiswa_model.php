<?php namespace App\Models;

use CodeIgniter\Model;

class mahasiswa_model extends Model
{
    public function getMahasiswa()
    {
        $builder = $this->db->table('mahasiswa');
        return $builder->get();
    }

    public function getEditData($nim){
        $builder = $this->db->table('mahasiswa')->where(['nim' => $nim]);
        return $builder->get();
    }

    public function insertMahasiswa($data)
    {
        $query = $this->db->table('mahasiswa')->insert($data);
        return $query;
    }

    public function editMahasiswa($data,$nim)
    {
        $query = $this->db->table('mahasiswa')->update($data,['nim' => $nim]);
        return $query;
    }

    public function hapusMahasiswa($nim)
    {
        $query = $this->db->table('mahasiswa')->delete(['nim' => $nim]);
        return $query;
    }
}
