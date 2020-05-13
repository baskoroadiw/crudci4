<?php namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_model extends Model
{
    public function getMahasiswa()
    {
        $builder = $this->db->table('mahasiswa');
        return $builder->get();
    }

    public function insertMahasiswa($data)
    {
        $query = $this->db->table('mahasiswa')->insert($data);
        return $query;
    }
}