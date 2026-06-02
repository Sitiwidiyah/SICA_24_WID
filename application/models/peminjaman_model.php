<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_model extends CI_Model
{
    public function get_all()
    {
        $this->db->select('peminjaman.*, anggota.nama');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'anggota.id = peminjaman.anggota_id');
        return $this->db->get()->result();
    }

    public function insert($data, $buku_id)
    {
        // insert peminjaman
        $this->db->insert('peminjaman', $data);
        $peminjaman_id = $this->db->insert_id();

        // insert detail peminjaman
        $this->db->insert('detail_peminjaman', [
            'peminjaman_id' => $peminjaman_id,
            'buku_id'       => $buku_id,
            'qty'           => 1
        ]);

        // kurangi stok
        $this->db->set('stok', 'stok - 1', FALSE);
        $this->db->where('id', $buku_id);
        $this->db->update('buku');
    }

    public function pengembalian($id)
    {
        // ambil data peminjaman + detail buku
        $peminjaman = $this->db->get_where('peminjaman', ['id' => $id])->row();

        $detail = $this->db
            ->get_where('detail_peminjaman', ['peminjaman_id' => $id])
            ->row();

        if (!$peminjaman || !$detail) {
            return false;
        }

        $tgl_kembali = date('Y-m-d');

        // hitung keterlambatan
        $selisih = (strtotime($tgl_kembali) - strtotime($peminjaman->tanggal_jatuh_tempo)) / 86400;
        $terlambat = ($selisih > 0) ? $selisih : 0;

        $denda = $terlambat * 1000;

        // 🔥 1. INSERT ke tabel pengembalian (INI YANG KAMU KURANG)
        $this->db->insert('pengembalian', [
            'peminjaman_id'   => $id,
            'tanggal_kembali' => $tgl_kembali,
            'terlambat'       => $terlambat,
            'denda'           => $denda
        ]);

        // 🔥 2. update status peminjaman
        $this->db->where('id', $id);
        $this->db->update('peminjaman', [
            'status' => 'kembali'
        ]);

        // 🔥 3. tambah stok buku
        $this->db->set('stok', 'stok + 1', FALSE);
        $this->db->where('id', $detail->buku_id);
        $this->db->update('buku');
    }
}