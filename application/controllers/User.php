<?php
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['user'] = $this->getUser();
        $this->load->view('partials/header');
        $this->load->view('user/index', $data);
        $this->load->view('partials/footer');
    }

    public function edit()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        $data['user'] = $this->getUser();
        if ($this->form_validation->run() == false) {
            $this->load->view('partials/header');
            $this->load->view('user/edit', $data);
            $this->load->view('partials/footer');
        } else {
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $email = $this->input->post('email');

            // cek jika ada gambar yang di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];

                    if ($old_image != '(1).jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('email', $email);
            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your profile has been updated.
                </div>');
            redirect('user');
        }
    }

    public function getUser()
    {
        return
            // ambil data user
            $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    }
}
