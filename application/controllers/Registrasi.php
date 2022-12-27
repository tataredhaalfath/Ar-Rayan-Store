
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggan_model');
    }
    //halaman registrasi
    public function index()
    {
        //validasi input
        $valid = $this->form_validation;
        $valid->set_rules('nama_pelanggan', 'Nama Lengkap', 'required', [
            'required' => '%s harus diisi!'
        ]);
        $valid->set_rules('email', 'Email', 'required|valid_email|is_unique[pelanggan.email]', [
            'required' => '%s harus diisi!',
            'valid_email' => '%s tidak valid',
            'is_unique' => '%s sudah terdaftar, gunakan email lain'
        ]);

        $valid->set_rules('password', 'Password', 'required', [
            'required' => '%s harus diisi!'
        ]);


        if ($valid->run() == false) {
            $data = [
                'title' => 'Registrasi Pelanggan',
                'isi' => 'registrasi/list'
            ];
            $this->load->view('layout/wrapper', $data);
        } else {
            //masuk database
            $i = $this->input;
            $data = [
                'status_pelanggan' => 'Pending',
                'nama_pelanggan' => htmlspecialchars($i->post('nama_pelanggan')),
                'email' => htmlspecialchars($i->post('email')),
                'password' => password_hash($i->post('password'), PASSWORD_DEFAULT),
                'telepon' => htmlspecialchars($i->post('telepon')),
                'alamat' => htmlspecialchars($i->post('alamat')),
                'tanggal_daftar' => date('Y-m-d H:i:s')

            ];
            $this->pelanggan_model->tambah($data);
            //create session login pelanggan
            $this->session->set_userdata('email', $i->post('email'));
            $this->session->set_userdata('nama_pelanggan', $i->post('nama_pelanggan'));
            //end create session
            $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Selamat. Registrasi berhasil, silahkan login!
            </div>');
            redirect(base_url('registrasi/sukses'));
        }
    }
    public function sukses()
    {
        $data = [
            'title' => 'Registrasi Berhasil',
            'isi' => 'registrasi/sukses'
        ];

        $this->load->view('layout/wrapper', $data);
    }
}

/* End of file Controllername.php */
