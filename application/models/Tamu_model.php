<?php
class Tamu_model extends CI_Model {
    public function insert($data) {
        $this->db->insert('tamu', $data);
    }

    public function getAll($tanggal = null) {
        if ($tanggal) {
            $this->db->like('tanggal', $tanggal);
        }
        return $this->db->get('tamu')->result_array();
    }

    public function hapus($id) {
        $this->db->delete('tamu', ['id' => $id]);
    }
}
