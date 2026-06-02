<?php
class Anggota_model extends CI_Model {

    public function getAll(){
        return $this->db->get('anggota')->result();
    }

    public function getById($id){
        return $this->db->get_where('anggota', ['id' => $id])->row();
    }

    public function insert(){
        $data = [
            'nomor_anggota'  => $this->input->post('nomor'),
            'nama'           => $this->input->post('nama'),
            'alamat'         => $this->input->post('alamat'),
            'telepon'        => $this->input->post('telepon'),
            'email'          => $this->input->post('email'),
            'tanggal' => $this->input->post('tanggal'),
           'status' => $this->input->post('status')
        ];
        $this->db->insert('anggota', $data);
    }

    public function update($id){
        $data = [
            'nomor_anggota'  => $this->input->post('nomor'),
            'nama'           => $this->input->post('nama'),
            'alamat'         => $this->input->post('alamat'),
            'telepon'        => $this->input->post('telepon'),
            'email'          => $this->input->post('email'),
            'tanggal' => $this->input->post('tanggal'),
            'status'         => $this->input->post('status'),
        ];
        $this->db->update('anggota', $data, ['id' => $id]);
    }

    public function delete($id){
        $this->db->delete('anggota', ['id' => $id]);
    }
}