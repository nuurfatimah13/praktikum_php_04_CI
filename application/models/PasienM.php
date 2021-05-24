<?php

class PasienM extends CI_Model {
    public $id, $nama, $kode, $gender, $tmp_lahir, $tgl_lahir, $email;

    // membuat method untuk mendapatkan semua data
    public function getAll() {
        // selecting data
        $query = $this->db->get('pasien');
        return $query->result();
    }

    // membuat method untuk mendapatkan data tertentu
    public function getById($id) {
        // selecting data
        $query = $this->db->get_where('pasien', ['id' => $id]);
        return $query->row();
    }
   

    // rujukan untuk pasien
}

