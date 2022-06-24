<?php
class Barang extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->view('partials/header');
        $this->load->view('barang/index', $data);
        $this->load->view('partials/footer');
    }
    public function tambah()
    {
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/header');
            $this->load->view('barang/tambah', $data);
            $this->load->view('partials/footer');
        } else {
            $this->Barang_model->tambahDataBarang();
            $this->session->set_flashdata('namasession', 'Ditambahkan');
            redirect('barang');
        }
    }
    public function hapus($id)
    {
        $this->Barang_model->hapusDataBarang($id);
        $this->session->set_flashdata('namasession', 'Dihapus');
        redirect('barang');
    }
}
