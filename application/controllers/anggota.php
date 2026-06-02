<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->library('form_validation');
        if(!$this->session->userdata('login')){
            redirect('login');
        }
    }

    // tampil data
    public function index(){
        $data['anggota'] = $this->Anggota_model->getAll();
        $this->load->view('anggota/index', $data);
    }

    // halaman tambah
    public function tambah(){
        $this->load->view('anggota/tambah');
    }

    // simpan data
    public function simpan(){
        $this->form_validation->set_rules('nomor',   'Nomor Anggota', 'required');
        $this->form_validation->set_rules('nama',    'Nama',          'required');
        $this->form_validation->set_rules('alamat',  'Alamat',        'required');
        $this->form_validation->set_rules('telepon', 'Telepon',       'required');
        $this->form_validation->set_rules('email',   'Email',         'required|valid_email');
        $this->form_validation->set_rules('tanggal', 'Tanggal',       'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('anggota/tambah');
        } else {
            $this->Anggota_model->insert();
            redirect('anggota');
        }
    }

    // halaman edit  ← TAMBAHAN
    public function edit($id){
        $data['anggota'] = $this->Anggota_model->getById($id);
        $this->load->view('anggota/edit', $data);
    }

    // update data  ← TAMBAHAN
    public function update($id){
        $this->form_validation->set_rules('nomor',   'Nomor Anggota', 'required');
        $this->form_validation->set_rules('nama',    'Nama',          'required');
        $this->form_validation->set_rules('alamat',  'Alamat',        'required');
        $this->form_validation->set_rules('telepon', 'Telepon',       'required');
        $this->form_validation->set_rules('email',   'Email',         'required|valid_email');
        $this->form_validation->set_rules('tanggal', 'Tanggal',       'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE){
            $data['anggota'] = $this->Anggota_model->getById($id);
            $this->load->view('anggota/edit', $data);
        } else {
            $this->Anggota_model->update($id);
            redirect('anggota');
        }
    }

    // hapus
    public function hapus($id){
        $this->Anggota_model->delete($id);
        redirect('anggota');
    }
}