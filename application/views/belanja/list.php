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
            <div class="col-lg-12 col-md-12">
                <?=
                    $this->session->flashdata('success');
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
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
                                            <?php include('delete_peritem.php'); ?>
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
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-3 col-sm-3 ml-auto">
                <?php include('delete.php'); ?>
            </div>
            <div class="col-lg-auto col-sm-auto">
                <div class="update-box">
                    <a href="<?= base_url('belanja/checkout'); ?>" class="btn btn-success btn-lg"><i class="fa fa-shopping-cart"></i> Checkout</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->