<?php
class Barang_model extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }
}
