<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function index()
    {
        $data['buku'] = $this->db
            ->join('kategori', 'kategori.id = buku.id_kategori')
            ->get('buku')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['kategori'] = $this->db->get('kategori')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('buku/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'kode_buku' => $this->input->post('kode'),
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun' => $this->input->post('tahun'),
            'id_kategori' => $this->input->post('kategori'),
            'stok' => $this->input->post('stok'),
            'lokasi_rak' => $this->input->post('rak')
        ];

        $this->db->insert('buku', $data);
        redirect('buku');
    }
}