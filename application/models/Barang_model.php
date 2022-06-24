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
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }
}
