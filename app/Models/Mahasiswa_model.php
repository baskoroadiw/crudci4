<?php namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_model extends Model
{
    public function getMahasiswa($nim = false)
    {
        if ($nim == false){
            $builder = $this->db->table('mahasiswa');
            return $builder->get();
        }
        else{
            $builder = $this->db->table('mahasiswa');
            return $builder->where('nim',$nim)->get();
        }
    }

    public function insertMahasiswa($data)
    {
        $query = $this->db->table('mahasiswa')->insert($data);
        return $query;
    }

    public function editMahasiswa($data,$id)
    {
        $query = $this->db->table('mahasiswa')->update($data,['nim' => $id]);
        return $query;
    }
}