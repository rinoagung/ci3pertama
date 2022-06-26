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

        // PAGINATON
        $this->load->library('pagination');

        // load library
        $config['base_url'] = "http://ci3pertama.test/barang/index";
        $config['total_rows'] = $this->barang->countAllBarang();
        $config['per_page'] = 2;
        // $config['num_links'] = 3;


        // styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['barang'] = $this->barang->getBarang($config['per_page'], $data['start']);

        if ($this->input->post('keyword')) {
            $data['barang'] = $this->Barang_model->cariDataBarang();
        }
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
    public function detail($id)
    {
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $this->load->view('partials/header');
        $this->load->view('barang/detail', $data);
        $this->load->view('partials/footer');
    }

    public function ubah($id)
    {
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('partials/header');
            $this->load->view('barang/ubah', $data);
            $this->load->view('partials/footer');
        } else {
            $this->Barang_model->ubahDataBarang();
            $this->session->set_flashdata('namasession', 'Diubah');
            redirect('barang');
        }
    }
}
