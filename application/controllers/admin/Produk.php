<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    //load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
        $this->load->model('kategori_model');
        //proteksi halaman
        $this->simple_login->cek_login();
    }
    //data produk
    public function index()
    {
        $produk = $this->produk_model->listing();
        $data = array(
            'title' => 'Data Produk',
            'produk' => $produk,
            'isi' => 'admin/produk/list'
        );

        $this->load->view('admin/layout/wrapper', $data);
    }
    public function gambar($id_produk)
    {
        $produk = $this->produk_model->detail($id_produk);
        $gambar = $this->produk_model->gambar($id_produk);

        $valid = $this->form_validation;
        $valid->set_rules('judul_gambar', 'Nama Gambar', 'required', [
            'required' => '%s harus diisi!'
        ]);


        if ($valid->run()) {

            $config['upload_path'] = './assets/upload/image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '5000'; //kb
            $config['max_width']  = '2024';
            $config['max_height']  = '2024';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'title' => 'Tambah Gambar Produk : ' . $produk['nama_produk'],
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/produk/gambar',
                    'produk' => $produk,
                    'gambar' => $gambar
                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                //masuk database
                $upload_gambar = array('upload_data' => $this->upload->data());
                //create thumbnail gambar
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/upload/image/' . $upload_gambar['upload_data']['file_name'];
                //lokasi folder thumbnail
                $config['new_image'] = './assets/upload/image/thumbs/';
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = 250; //pixel
                $config['height']       = 250; //pixel
                $config['thumb_marker'] = ''; //menghilangkan _thumb pada nama file

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                //end create thumbnail
                $i = $this->input;
                $data = [
                    'id_produk' => $id_produk,
                    'judul_gambar' => htmlspecialchars($i->post('judul_gambar')),
                    'gambar' => htmlspecialchars($upload_gambar['upload_data']['file_name'])

                ];
                $this->produk_model->tambah_gambar($data);
                $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Gambar telah ditambahkan
            </div>');
                redirect(base_url('admin/produk/gambar/' . $id_produk));
            }
        }
        //end masuk database
        $data = array(
            'title' => 'Tambah Gambar Produk : ' . $produk['nama_produk'],
            'isi' => 'admin/produk/gambar',
            'gambar' => $gambar,
            'produk' => $produk
        );
        $this->load->view('admin/layout/wrapper', $data);
    }
    //delete gambar produk
    public function delete_gambar($id_produk, $id_gambar)
    {
        //proses hapus gambar
        $gambar = $this->produk_model->detail_gambar($id_gambar);
        unlink(FCPATH . 'assets/upload/image/' . $gambar['gambar']);
        unlink(FCPATH . 'assets/upload/image/thumbs/' . $gambar['gambar']);
        $data = [
            'id_gambar' => $id_gambar
        ];
        $this->produk_model->delete_gambar($data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data gambar berhasil dihapus!
            </div>');
        redirect(base_url('admin/produk/gambar/' . $id_produk));
    }
    //tambah produk
    public function tambah()
    {
        //ambil data kategori
        $kategori = $this->kategori_model->listing();
        //validasi input
        $valid = $this->form_validation;
        $valid->set_rules('nama_produk', 'Nama Produk', 'required', [
            'required' => '%s harus diisi!'
        ]);
        $valid->set_rules('kode_produk', 'Kode Produk', 'required|is_unique[produk.kode_produk]', [
            'required' => '%s harus diisi!',
            'is_unique' => '%s sudah ada. Buat kode baru!'
        ]);



        if ($valid->run()) {

            $config['upload_path'] = './assets/upload/image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '5000'; //kb
            $config['max_width']  = '2024';
            $config['max_height']  = '2024';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'title' => 'Tambah Produk',
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/produk/tambah',
                    'kategori' => $kategori
                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                //masuk database
                $upload_gambar = array('upload_data' => $this->upload->data());
                //create thumbnail gambar
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/upload/image/' . $upload_gambar['upload_data']['file_name'];
                //lokasi folder thumbnail
                $config['new_image'] = './assets/upload/image/thumbs/';
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = 250; //pixel
                $config['height']       = 250; //pixel
                $config['thumb_marker'] = ''; //menghilangkan _thumb pada nama file

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                //end create thumbnail
                $i = $this->input;
                $slug_produk = url_title($this->input->post('nama_produk') . '-' . $this->input->post('kode_produk'), 'dash', TRUE);
                $data = [
                    'id_user' => $this->session->userdata('id_user'),
                    'id_kategori' => htmlspecialchars($this->input->post('id_kategori')),
                    'kode_produk' => htmlspecialchars($i->post('kode_produk')),
                    'nama_produk' => htmlspecialchars($i->post('nama_produk')),
                    'slug_produk' => htmlspecialchars($slug_produk),
                    'keterangan' => htmlspecialchars($i->post('keterangan')),
                    'keyword' => htmlspecialchars($i->post('keyword')),
                    'harga' => htmlspecialchars($i->post('harga')),
                    'stok' => htmlspecialchars($i->post('stok')),
                    //disimpan nama file gambar
                    'gambar' => htmlspecialchars($upload_gambar['upload_data']['file_name']),
                    'berat' => htmlspecialchars($i->post('berat')),
                    'ukuran' => htmlspecialchars($i->post('ukuran')),
                    'status_produk' => htmlspecialchars($i->post('status_produk')),
                    'tanggal_post' => date('Y-m-d H:i:s')
                ];
                $this->produk_model->tambah($data);
                $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data telah ditambah!
            </div>');
                redirect(base_url('admin/produk'));
            }
        }
        //end masuk database
        $data = array(
            'title' => 'Tambah Produk',
            'isi' => 'admin/produk/tambah',
            'kategori' => $kategori
        );
        $this->load->view('admin/layout/wrapper', $data);
    }
    //delete produk
    public function delete($id_produk)
    {
        //proses hapus gambar
        $produk = $this->produk_model->detail($id_produk);
        unlink(FCPATH . 'assets/upload/image/' . $produk['gambar']);
        unlink(FCPATH . 'assets/upload/image/thumbs/' . $produk['gambar']);
        $data = [
            'id_produk' => $id_produk
        ];
        $this->produk_model->delete($data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                Data berhasil dihapus!
            </div>');
        redirect(base_url('admin/produk'));
    }

    //edit produk
    public function edit($id_produk)
    {
        //ambil data produk yang akan di edit
        $produk = $this->produk_model->detail($id_produk);
        //ambil data kategori
        $kategori = $this->kategori_model->listing();

        //validasi input
        $valid = $this->form_validation;
        $valid->set_rules('nama_produk', 'Nama Produk', 'required', [
            'required' => '%s harus diisi!'
        ]);
        $valid->set_rules('kode_produk', 'Kode Produk', 'required', [
            'required' => '%s harus diisi!',

        ]);



        if ($valid->run()) {
            //cek jika gambar diganti
            if (!empty($_FILES['gambar']['name'])) {


                $config['upload_path'] = './assets/upload/image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = '5000'; //kb
                $config['max_width']  = '2024';
                $config['max_height']  = '2024';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $data = array(
                        'title' => 'Edit Produk :' . $produk['nama_produk'],
                        'error' => $this->upload->display_errors(),
                        'isi' => 'admin/produk/edit',
                        'kategori' => $kategori
                    );
                    $this->load->view('admin/layout/wrapper', $data);
                } else {
                    //masuk database
                    $upload_gambar = array('upload_data' => $this->upload->data());
                    //create thumbnail gambar
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/upload/image/' . $upload_gambar['upload_data']['file_name'];
                    //lokasi folder thumbnail
                    $config['new_image'] = './assets/upload/image/thumbs/';
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 250; //pixel
                    $config['height']       = 250; //pixel
                    $config['thumb_marker'] = ''; //menghilangkan _thumb pada nama file

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();
                    //end create thumbnail
                    unlink(FCPATH . 'assets/upload/image/' . $produk['gambar']);
                    unlink(FCPATH . 'assets/upload/image/thumbs/' . $produk['gambar']);
                    $i = $this->input;
                    $slug_produk = url_title($this->input->post('nama_produk') . '-' . $this->input->post('kode_produk'), 'dash', TRUE);
                    $data = [
                        'id_produk' => $id_produk,
                        'id_user' => $this->session->userdata('id_user'),
                        'id_kategori' => htmlspecialchars($this->input->post('id_kategori')),
                        'kode_produk' => htmlspecialchars($i->post('kode_produk')),
                        'nama_produk' => htmlspecialchars($i->post('nama_produk')),
                        'slug_produk' => htmlspecialchars($slug_produk),
                        'keterangan' => htmlspecialchars($i->post('keterangan')),
                        'keyword' => htmlspecialchars($i->post('keyword')),
                        'harga' => htmlspecialchars($i->post('harga')),
                        'stok' => htmlspecialchars($i->post('stok')),
                        //disimpan nama file gambar
                        'gambar' => htmlspecialchars($upload_gambar['upload_data']['file_name']),
                        'berat' => htmlspecialchars($i->post('berat')),
                        'ukuran' => htmlspecialchars($i->post('ukuran')),
                        'status_produk' => htmlspecialchars($i->post('status_produk'))

                    ];
                    $this->produk_model->edit($data);
                    $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                                Data telah diedit!
                        </div>');
                    redirect(base_url('admin/produk'));
                }
            } else {
                //edit produk tanpa ganti gambar
                $i = $this->input;
                $slug_produk = url_title($this->input->post('nama_produk') . '-' . $this->input->post('kode_produk'), 'dash', TRUE);
                $data = [
                    'id_produk' => $id_produk,
                    'id_user' => $this->session->userdata('id_user'),
                    'id_kategori' => htmlspecialchars($this->input->post('id_kategori')),
                    'kode_produk' => htmlspecialchars($i->post('kode_produk')),
                    'nama_produk' => htmlspecialchars($i->post('nama_produk')),
                    'slug_produk' => htmlspecialchars($slug_produk),
                    'keterangan' => htmlspecialchars($i->post('keterangan')),
                    'keyword' => htmlspecialchars($i->post('keyword')),
                    'harga' => htmlspecialchars($i->post('harga')),
                    'stok' => htmlspecialchars($i->post('stok')),
                    //gambar tidak diganti
                    //'gambar' => htmlspecialchars($upload_gambar['upload_data']['file_name']),
                    'berat' => htmlspecialchars($i->post('berat')),
                    'ukuran' => htmlspecialchars($i->post('ukuran')),
                    'status_produk' => htmlspecialchars($i->post('status_produk'))

                ];
                $this->produk_model->edit($data);
                $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
                                Data telah diedit!
                        </div>');
                redirect(base_url('admin/produk'));
            }
        }
        //end masuk database
        $data = array(
            'title' => 'Edit Produk : ' . $produk['nama_produk'],
            'isi' => 'admin/produk/edit',
            'produk' => $produk,
            'kategori' => $kategori
        );
        $this->load->view('admin/layout/wrapper', $data);
    }
}
