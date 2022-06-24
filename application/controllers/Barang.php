<?php
class Barang extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
    public function index()
    {
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->view('partials/header');
        $this->load->view('barang/index', $data);
        $this->load->view('partials/footer');
    }
}
