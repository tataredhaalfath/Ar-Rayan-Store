<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    //load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        //proteksi halaman
        $this->simple_login->cek_login();
    }
    //data user
    public function index()
    {
        $user = $this->user_model->listing();
        $data = array(
            'title' => 'Data Pengguna',
            'user' => $user,
            'isi' => 'admin/user/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }
    //tambah user
    public function tambah()
    {
        //validasi input
        $valid = $this->form_validation;
        $valid->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => '%s harus diisi!'
        ]);
        $valid->set_rules('email', 'Email', 'required|valid_email', [
            'required' => '%s harus diisi!',
            'valid_email' => '%s tidak valid'
        ]);
        $valid->set_rules('username', 'Username', 'required|is_unique[user.username]|min_length[6]|max_length[32]', [
            'required' => '%s harus diisi!',
            'min_length' => '%s minimal 6 karakter',
            'max_length' => '%s maksimal 32 karakter',
            'is_unique' => '%s sudah ada. Buat username baru'
        ]);
        $valid->set_rules('password', 'Password', 'required', [
            'required' => '%s harus diisi!'
        ]);


        if ($valid->run() == false) {
            $data = array(
                'title' => 'Tambah Pengguna',
                'isi' => 'admin/user/tambah'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {
            //masuk database
            $i = $this->input;
            $data = [
                'nama' => htmlspecialchars($i->post('nama')),
                'email' => htmlspecialchars($i->post('email')),
                'username' => htmlspecialchars($i->post('username')),
                'password' => password_hash($i->post('password'), PASSWORD_DEFAULT),
                'akses_level' => htmlspecialchars($i->post('akses_level')),

            ];
            $this->user_model->tambah($data);
            $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data telah ditambah!
            </div>');
            redirect(base_url('admin/user'));
        }
    }
    public function delete($id_user)
    {
        $data = [
            'id_user' => $id_user
        ];
        $this->user_model->delete($data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data berhasil dihapus!
            </div>');
        redirect(base_url('admin/user'));
    }
    //edit user
    public function edit($id_user)
    {
        $user = $this->user_model->detail($id_user);
        //validasi input
        $valid = $this->form_validation;
        $valid->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => '%s harus diisi!'
        ]);
        $valid->set_rules('email', 'Email', 'required|valid_email', [
            'required' => '%s harus diisi!',
            'valid_email' => '%s tidak valid'
        ]);
        $valid->set_rules('password', 'Password', 'required', [
            'required' => '%s harus diisi!'
        ]);


        if ($valid->run() == false) {
            $data = array(
                'title' => 'Edit Pengguna',
                'user' => $user,
                'isi' => 'admin/user/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {
            //masuk database
            $i = $this->input;
            $data = [
                'id_user' => $id_user,
                'nama' => htmlspecialchars($i->post('nama')),
                'email' => htmlspecialchars($i->post('email')),
                'username' => htmlspecialchars($i->post('username')),
                'password' => password_hash($i->post('password'), PASSWORD_DEFAULT),
                'akses_level' => htmlspecialchars($i->post('akses_level')),

            ];
            $this->user_model->edit($data);
            $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data telah diedit!
            </div>');
            redirect(base_url('admin/user'));
        }
    }
}
