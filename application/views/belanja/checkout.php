<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->
<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?= $subtitle; ?></h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">Item</li>
                    <li class="breadcrumb-item active"><?= $subtitle; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?=
                    $this->session->flashdata('success');
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Sub Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- form update -->
                            <?php foreach ($keranjang as $keranjang) :
                                $id_produk = $keranjang['id'];
                                $produk = $this->produk_model->detail($id_produk); ?>
                                <form action="<?= base_url('belanja/update_cart/' . $keranjang['rowid']); ?>" method="POST">
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                                <img class="img-fluid" src="<?= base_url('assets/upload/image/thumbs/' . $produk['gambar']); ?>" alt="<?= $keranjang['name']; ?>" />
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="#">
                                                <?= $keranjang['name']; ?>
                                            </a>
                                        </td>
                                        <td class="price-pr">
                                            <p> Rp. <?= number_format($keranjang['price'], '0', ',', '.'); ?></p>
                                        </td>
                                        <td class="quantity-box"><input type="number" name="qty" size="4" value="<?= $keranjang['qty']; ?>" min="1" step="1" max="20" class="c-input-text qty text"></td>
                                        <td class="total-pr">
                                            <p>Rp. <?= number_format($keranjang['subtotal'], '0', ',', '.'); ?></p>
                                        </td>
                                        <td class="remove-pr">
                                            <button type="submit" name="update" class="btn btn-success btn-sm"><i class="fa fa-edit">Update</i></button>
                                            <!-- <a href="<?= base_url('belanja/hapus/' . $keranjang['rowid']); ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash">Hapus</i></a> -->
                                            <?= include('delete_peritem.php'); ?>
                                        </td>
                                    </tr>
                                </form>
                            <?php endforeach; ?>
                            <tr class="table-row bg-info text-white " style="font-weight: bold">
                                <td colspan=" 4" class="column-1">Total Belanja</td>
                                <td class="column-2">Rp. <?= number_format($this->cart->total(), '0', ',', '.'); ?></td>
                                <td class="column-3"></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <form action="<?= base_url('belanja/checkout') ?>" method="post">
                    <input type="hidden" name="id_pelanggan" id="id_pelanggan" value="<?= $pelanggan['id_pelanggan']; ?>">
                    <input type="hidden" name="jumlah_transaksi" id="jumlah_transaksi" value="<?= $this->cart->total(); ?>">
                    <input type="hidden" name="tanggal_transaksi" id="tanggal_transaksi" value="<?= date('Y-m-d'); ?>">
                    <table class="table">
                        <tbody>
                            <?php
                            $kode_transaksi = date('dmY') .  strtoupper(random_string('alnum', 8));
                            ?>
                            <tr>
                                <td>Kode Transaksi</td>
                                <td><input type="text" name="kode_transaksi" id="kode_transaksi" class="form-control" placeholder="kode_transaksi" value="<?= $kode_transaksi; ?>" required readonly></td>
                            </tr>
                            <tr>
                                <td>Nama Penerima</td>
                                <td><input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" placeholder="nama" value="<?= $pelanggan['nama_pelanggan']; ?>" required></td>
                            </tr>
                            <tr>
                                <td>Email Penerima</td>
                                <td><input type="email" name="email" id="email" class="form-control" placeholder="email" value="<?= $pelanggan['email']; ?>" required></td>
                            </tr>

                            <tr>
                                <td>Telepon Penerima</td>
                                <td><input type="text" name="telepon" id="telepon" class="form-control" placeholder="telepon" value="<?= $pelanggan['telepon']; ?>" required></td>
                            </tr>
                            <tr>
                                <td>Alamat Penerima</td>
                                <td><input type="textarea" name="alamat" id="alamat" class="form-control" placeholder="alamat" value="<?= $pelanggan['alamat']; ?>" required></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-success btn-lg">
                                        <i class="fa fa-save"></i> Bayar sekarang
                                    </button>
                                    <button type="reset" class="btn btn-default btn-lg">
                                        <i class="fa fa-times"></i> Reset
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>



    </div>
</div>
<!-- End Cart -->