<?php


class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('partials/header');
        $this->load->view('home/index');
        $this->load->view('partials/footer');
    }
}
