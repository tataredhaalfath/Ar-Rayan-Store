<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Welcome <?= $this->session->userdata('nama_pelanggan'); ?></h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>"><?= $title; ?></a></li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Contact Us  -->
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-3 col-md-3">
                <?php include('menu.php'); ?>
            </div>
            <div class="col-lg-10 col-sm-9 col-md-9">
                <h1><?= $title; ?></h1>
                <small>Berikut riwayat belanja anda : </small>
                <!-- kalau ada transaksi tampilkan -->
                <?php if ($header_transaksi) : ?>
                    <div class="table-responsive">
                        <table class="table  table-hover table-bordered text-center">
                            <thead>
                                <tr class="table-active">
                                    <th>NO</th>
                                    <th>KODE</th>
                                    <th>TANGGAL</th>
                                    <th>JUMLAH TOTAL</th>
                                    <th>JUMLAH ITEM</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($header_transaksi as $header_transaksi) : ?>
                                    <tr>
                                        <td><?= $i; ?> </td>
                                        <td><?= $header_transaksi['kode_transaksi']; ?></td>
                                        <td><?= date('d-m-Y', strtotime($header_transaksi['tanggal_transaksi'])); ?></td>
                                        <td>Rp. <?= number_format($header_transaksi['jumlah_transaksi'], '0', ',', '.'); ?></td>
                                        <td><?= $header_transaksi['total_item']; ?></td>
                                        <td><?= $header_transaksi['status_bayar']; ?></td>
                                        <td>
                                            <div class="button-group">
                                                <a href="<?= base_url('dashboard/detail/' . $header_transaksi['kode_transaksi']); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"> Detail</i></a>
                                                <a href="<?= base_url('dashboard/konfirmasi/' . $header_transaksi['kode_transaksi']); ?>" class="btn btn-info btn-sm"><i class="fa fa-upload"> Konfirmasi Bayar</i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else : ?>
                    <p class="alert alert-success"> <i class="fa fa-warning"></i> Belum ada data transaksi</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- End Cart -->