<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function login() {
		$this->load->view('admin/login');
	}

	public function login_action() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$admin = $this->Admin_model->get_admin($username);

		if ($admin && password_verify($password, $admin->password)) {
			$this->session->set_userdata('user', [
				'id' => $admin->id,
				'username' => $admin->username,
			]);
			redirect(base_url()."admin/dashboard");
		} else {
			$this->session->set_flashdata('error', 'Username atau Password salah!');
			redirect('admin/login');
		}
	}
    public function dashboard() {
        if (!$this->session->userdata('user')) {
            redirect('admin/login');
        }
    
        $tanggal = $this->input->get('tanggal');
    
        $this->load->model('Tamu_model');
        $data['tamu'] = $this->Tamu_model->getAll($tanggal);
        $data['title'] = "Dashboard Admin";
    
        $this->load->view('admin/dashboard', $data);
    }
    
    public function hapus($id) {
        if (!$this->session->userdata('user')) {
            redirect('admin/login');
        }
    
        $this->load->model('Tamu_model');
        $this->Tamu_model->hapus($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/dashboard');
    }    
    
	public function logout() {
		$this->session->unset_userdata('user');
		redirect(base_url());
	}
}
