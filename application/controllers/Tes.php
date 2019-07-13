<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tes_m');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['row'] = $this->tes_m->get();
        $this->load->view('home', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('fullname', 'full_name', 'required|trim');
        $this->form_validation->set_rules('phone', 'phone_number', 'required|trim|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('address', 'address', 'required|trim|min_length[3]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('add');
        } else {

            $post = $this->input->post(null, TRUE);
            $this->tes_m->add($post);
            if ($this->db->affected_rows() > 0) { }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil ditambah!</div>');
            redirect('tes');
        }
    }
    public function del($id)
    {

        $this->tes_m->del($id);
        redirect('tes');
    }
}
