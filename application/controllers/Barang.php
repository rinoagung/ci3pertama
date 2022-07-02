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
        // $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->model('Barang_model', 'barang');

        $data['user'] = $this->getUser();
        // PAGINATON
        $this->load->library('pagination');

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // load library
        $this->db->like('nama', $data['keyword']);
        // $this->db->or_like('berat', $data['keyword']);
        $this->db->from('barang');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 2;

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['barang'] = $this->barang->getBarang($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('partials/header');
        $this->load->view('partials/nav', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('partials/footer');
    }
    public function tambah()
    {
        $data['barang'] = $this->Barang_model->getAllBarang();
        $data['user'] = $this->getUser();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/header');
            $this->load->view('partials/nav', $data);
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
        $data['user'] = $this->getUser();

        $this->session->set_flashdata('namasession', 'Dihapus');
        redirect('barang');
    }
    public function detail($id)
    {
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $data['user'] = $this->getUser();

        $this->load->view('partials/header');
        $this->load->view('partials/nav', $data);
        $this->load->view('barang/detail', $data);
        $this->load->view('partials/footer');
    }

    public function ubah($id)
    {
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $data['user'] = $this->getUser();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/header');
            $this->load->view('partials/nav', $data);
            $this->load->view('barang/ubah', $data);
            $this->load->view('partials/footer');
        } else {
            $this->Barang_model->ubahDataBarang();
            $this->session->set_flashdata('namasession', 'Diubah');
            redirect('barang');
        }
    }

    public function getUser()
    {
        return
            // ambil data user
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    }
}
