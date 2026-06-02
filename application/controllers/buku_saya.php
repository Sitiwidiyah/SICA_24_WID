<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_saya extends CI_Controller {

    // =====================
    // NO 2 - READ DATA
    // =====================
    public function index()
    {
        $data['buku'] = $this->db
            ->select('buku.*, kategori.nama_kategori')
            ->from('buku')
            ->join('kategori', 'kategori.id = buku.id_kategori')
            ->get()
            ->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('buku_saya/index', $data);
        $this->load->view('templates/footer');
    }

    // =====================
    // EDIT VIEW
    // =====================
    public function edit($id)
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $data['buku'] = $this->db->get_where('buku', ['id' => $id])->row();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('buku_saya/edit', $data);
        $this->load->view('templates/footer');
    }

    // =====================
    // UPDATE DATA
    // =====================
    public function update()
    {
        $id = $this->input->post('id');

        $data = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'id_kategori' => $this->input->post('id_kategori'),
            'stok' => $this->input->post('stok')
        ];

        $this->db->where('id', $id);
        $this->db->update('buku', $data);

        redirect('buku_saya');
    }

    // =====================
    // DELETE DATA
    // =====================
    public function hapus($id)
    {
        $this->db->delete('buku', ['id' => $id]);
        redirect('buku_saya');
    }
}