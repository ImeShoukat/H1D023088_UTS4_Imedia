<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function get_admin($username) {
		return $this->db->get_where('admin', ['username' => $username])->row();
	}
    public function hapus($id) {
        $this->db->delete('tamu', ['id' => $id]);
    }
}
