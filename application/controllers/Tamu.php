<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Tamu_model');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('tamu/form_tamu');
        $this->load->view('templates/footer');
    }

    public function simpan() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('keperluan', 'Keperluan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Kunjungan', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'instansi' => $this->input->post('instansi'),
                'keperluan' => $this->input->post('keperluan'),
                'tanggal' => $this->input->post('tanggal')
            ];
            $this->Tamu_model->insert($data);
            redirect('/');
        }
    }
    
}