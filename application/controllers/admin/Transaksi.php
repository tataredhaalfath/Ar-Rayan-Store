<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    //load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('header_transaksi_model');
        $this->load->model('transaksi_model');
        $this->load->model('rekening_model');
        $this->load->model('konfigurasi_model');
    }
    //load data transaksi
    public function index()
    {
        $header_transaksi = $this->header_transaksi_model->listing();
        $data = [
            'title' => 'Data Transaksi',
            'header_transaksi' => $header_transaksi,
            'isi' => 'admin/transaksi/list'
        ];
        $this->load->view('admin/layout/wrapper', $data);
    }
    //detial
    public function detail($kode_transaksi)
    {
        $header_transaksi = $this->header_transaksi_model->kode_transaksi($kode_transaksi);
        $transaksi = $this->transaksi_model->kode_transaksi($kode_transaksi);

        $data = [
            'title' => 'Riwayat Belanja',
            'subtitle' => 'Riwayat Belanja',
            'header_transaksi' => $header_transaksi,
            'transaksi' => $transaksi,
            'isi' => 'admin/transaksi/detail'

        ];
        $this->load->view('admin/layout/wrapper', $data);
    }

    //cetak
    public function cetak($kode_transaksi)
    {
        $header_transaksi = $this->header_transaksi_model->kode_transaksi($kode_transaksi);
        $transaksi = $this->transaksi_model->kode_transaksi($kode_transaksi);
        $site = $this->konfigurasi_model->listing();
        $data = [
            'title' => 'Riwayat Belanja',
            'subtitle' => 'Riwayat Belanja',
            'site' => $site,
            'header_transaksi' => $header_transaksi,
            'transaksi' => $transaksi,

        ];
        $this->load->view('admin/transaksi/cetak', $data);
    }

    //unduh pdf
    public function pdf($kode_transaksi)
    {
        $header_transaksi = $this->header_transaksi_model->kode_transaksi($kode_transaksi);
        $transaksi = $this->transaksi_model->kode_transaksi($kode_transaksi);
        $site = $this->konfigurasi_model->listing();
        $data = [
            'title' => 'Riwayat Belanja',
            'subtitle' => 'Riwayat Belanja',
            'site' => $site,
            'header_transaksi' => $header_transaksi,
            'transaksi' => $transaksi,

        ];
        // $this->load->view('admin/transaksi/cetak', $data);

        $html = $this->load->view('admin/transaksi/cetak', $data, true);
        // Create an instance of the class:
        $mpdf = new \Mpdf\Mpdf();

        // Write some HTML code:
        $mpdf->WriteHTML($html);

        // Output a PDF file directly to the browser
        $mpdf->Output('bukti-pembayaran.pdf', \Mpdf\Output\Destination::INLINE);
    }
}

/* End of file Controllername.php */
