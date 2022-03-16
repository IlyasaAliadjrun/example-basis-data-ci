<?php

class M_Mahasiswa extends CI_Model{
    public function getAll(){
        return $this->db->get('mahasiswa');
    }

    public function insertData($data){
        $this->db->insert('mahasiswa', $data);
    }

    public function getData($id){
        $this->db->where('id',$id);
        return $this->db->get('mahasiswa');
    }

    public function updateData($id,$data){
        $this->db->where('id',$id);
        $this->db->update('mahasiswa',$data);
    }

    public function deleteData($id){
        $this->db->where("id", $id);
        $this->db->delete('mahasiswa');
    }
}