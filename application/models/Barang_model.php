<?php
class Barang_model extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }
    public function tambahDataBarang()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'berat' => $this->input->post('berat', true),
            'jumlah' => $this->input->post('jumlah', true),
            'harga' => $this->input->post('harga', true),
            'gambar' => $this->input->post('gambar', true),
        ];
        $this->db->insert('barang', $data);
    }
    public function hapusDataBarang($id)
    {
        $this->db->delete('barang', ['id' => $id]);
    }
    public function getBarangById($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function ubahDataBarang()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'berat' => $this->input->post('berat', true),
            'jumlah' => $this->input->post('jumlah', true),
            'harga' => $this->input->post('harga', true),
            'gambar' => $this->input->post('gambar', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('barang', $data);
    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        // $this->db->or_like('berat', $keyword);
        return $this->db->get('barang')->result_array();
    }
}
