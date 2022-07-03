<?php


class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('partials/header');
        $this->load->view('partials/nav', $data);
        $this->load->view('home/index', $data);
        $this->load->view('partials/footer');
    }
}
