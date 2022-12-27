<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggan_model');
    }

    //login pelanggan
    public function index()
    {
        //validasi
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => '%s harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => '%s harus diisi'
        ]);
        if ($this->form_validation->run() == false) {

            $data = [
                'title' => 'Login Pelanggan',
                'isi' => 'masuk/list'
            ];
            $this->load->view('layout/wrapper', $data);
        } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->simple_pelanggan->login($email, $password);
        }
    }
    public function logout()
    {
        //ambil fungsi logout di simple_pelanggan 
        $this->simple_pelanggan->logout();
    }
}
