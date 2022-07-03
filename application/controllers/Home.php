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
        $this->load->view('partials/header');
        $this->load->view('partials/nav');
        $this->load->view('home/index');
        $this->load->view('partials/footer');
    }
}
