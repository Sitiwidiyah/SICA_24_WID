<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Load model
        $this->load->model('kategori_model');

        // Cek apakah user sudah login
        if (!$this->session->userdata('login')) {
            redirect('login');
        }
    }

    public function index()
    {
        // Ambil data dari database
        $data['total_buku']     = $this->db->count_all('buku');
        $data['total_anggota']  = $this->db->count_all('anggota');

        // Load view
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}