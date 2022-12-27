<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    //load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
        //proteksi halaman
        $this->simple_login->cek_login();
    }
    //data kategori
    public function index()
    {
        $kategori = $this->kategori_model->listing();
        $data = array(
            'title' => 'Data Kategori Produk',
            'kategori' => $kategori,
            'isi' => 'admin/kategori/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }
    //tambah kategori
    public function tambah()
    {
        //validasi input
        $valid = $this->form_validation;
        $valid->set_rules('nama_kategori', 'Nama Kategori', 'required|is_unique[kategori.nama_kategori]', [
            'required' => '%s harus diisi!',
            'is_unique' => '$s sudah ada. buat kategori baru!'
        ]);

        if ($valid->run() == false) {
            $data = array(
                'title' => 'Tambah Kategori Produk',
                'isi' => 'admin/kategori/tambah'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {
            //masuk database
            $i = $this->input;
            $slug_kategori = url_title($this->input->post('nama_kategori'), 'dash', TRUE);
            $data = [
                'slug_kategori' => $slug_kategori,
                'nama_kategori' => htmlspecialchars($i->post('nama_kategori')),
                'urutan' => htmlspecialchars($i->post('urutan'))


            ];
            $this->kategori_model->tambah($data);
            $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data telah ditambah!
            </div>');
            redirect(base_url('admin/kategori'));
        }
    }
    public function delete($id_kategori)
    {
        $data = [
            'id_kategori' => $id_kategori
        ];
        $this->kategori_model->delete($data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data berhasil dihapus!
            </div>');
        redirect(base_url('admin/kategori'));
    }
    //edit kategori
    public function edit($id_kategori)
    {
        $kategori = $this->kategori_model->detail($id_kategori);

        //validasi input
        $valid = $this->form_validation;
        $valid->set_rules('nama_kategori', 'Nama Kategori', 'required', [
            'required' => '%s harus diisi!'
        ]);



        if ($valid->run() == false) {
            $data = array(
                'title' => 'Edit Kategori Produk',
                'kategori' => $kategori,
                'isi' => 'admin/kategori/edit'
            );
            $this->load->view('admin/layout/wrapper', $data);
        } else {
            //masuk database
            $i = $this->input;
            $slug_kategori = url_title($this->input->post('nama_kategori'), 'dash', TRUE);
            $data = [
                'id_kategori' => $id_kategori,
                'slug_kategori' => $slug_kategori,
                'nama_kategori' => htmlspecialchars($i->post('nama_kategori')),
                'urutan' => htmlspecialchars($i->post('urutan'))

            ];
            $this->kategori_model->edit($data);
            $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data telah diedit!
            </div>');
            redirect(base_url('admin/kategori'));
        }
    }
}
