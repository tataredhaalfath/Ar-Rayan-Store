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
                    <li class="breadcrumb-item"><a href="<?= base_url('produk/kategori/' . $produk['slug_kategori']); ?>"><?= $produk['nama_kategori']; ?></a></li>
                    <li class="breadcrumb-item active"><?= $produk['nama_produk']; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <form action="<?= base_url('belanja/add'); ?>" method="POST">
                    <?php
                    // element yang dibawa
                    echo form_hidden('id', $produk['id_produk']);
                    // echo form_hidden('qty', 1);
                    echo form_hidden('price', $produk['harga']);
                    echo form_hidden('name', $produk['nama_produk']);
                    //elemet redirect
                    echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));

                    ?>
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="<?= base_url('assets/upload/image/' . $produk['gambar']); ?>" alt="<?= $produk['nama_produk'] ?>"> </div>
                            <?php if ($gambar) :
                                foreach ($gambar as $gam) : ?>
                                    <div class="carousel-item"> <img class="d-block w-100" src="<?= base_url('assets/upload/image/' . $gam['gambar']); ?>" alt="<?= $gam['judul_gambar']; ?>"> </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <!-- <div class="carousel-item"> <img class="d-block w-100" src="images/Samsung/S/S10-plus-03.png" alt="Third slide"> </div> -->
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="<?= base_url('assets/upload/image/thumbs/' . $produk['gambar']); ?>" alt="<?= $produk['nama_produk'] ?>" />
                            </li>
                            <?php if ($gambar) :
                                foreach ($gambar as $gambar) : ?>
                                    <li data-target="#carousel-example-1" data-slide-to="1">
                                        <img class="d-block w-100 img-fluid" src="<?= base_url('assets/upload/image/thumbs/' . $gambar['gambar']); ?>" alt="<?= $gam['judul_gambar']; ?>" />
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <!-- <li data-target="#carousel-example-1" data-slide-to="2">
                            <img class="d-block w-100 img-fluid" src="images/Samsung/S/S10-plus-03.png" alt="" />
                        </li> -->
                        </ol>
                    </div>

            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2><?= $produk['nama_produk']; ?></h2>
                    <h5> <del>Rp. <?= number_format($produk['harga'] + (($produk['harga'] / 100) * 20), '0', ',', '.'); ?></del> <br> Rp.<?= number_format($produk['harga'], '0', ',', '.'); ?></h5>
                    <p class="available-stock"><span> <?= $produk['stok']; ?> produk tersedia </a></span>
                        <p>
                            <h4>Spesifikasi</h4>
                            <?php echo $produk['keterangan']; ?>

                            <ul>

                                <li>
                                    <div class="form-group quantity-box">
                                        <label class="control-label">Jumlah</label>
                                        <input class="form-control" value="1" min="1" max="20" type="number" name="qty">
                                    </div>

                                </li>
                                <li>
                                    <div class="form-group ">
                                        <label class="control-label"></label>
                                        <button class="form-control btn hvr-hover  mt-2" type="submit" name="submit" value="submit">Tambah Keranjang</button>
                                    </div>
                                </li>
                            </ul>
                            </form>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    <h2>Ulasan Produk</h2>
                </div>
                <div class="card-body">
                    <div class="media mb-3">
                        <div class="mr-2">
                            <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <p>Produknya Mantab Banget.</p>
                            <small class="text-muted">Dikirim oleh Andrean pada 3/1/18</small>
                        </div>
                    </div>
                    <hr>
                    <div class="media mb-3">
                        <div class="mr-2">
                            <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <p>Produk Sesuai Deskripsi, nggak nyesel beli disini.</p>
                            <small class="text-muted">Dikirim oleh Reza pada 3/1/18</small>
                        </div>
                    </div>
                    <hr>
                    <div class="media mb-3">
                        <div class="mr-2">
                            <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <p>Barang cepat sampai, produk berkualitas. next order kesini lagi.</p>
                            <small class="text-muted">Dikirim oleh Nata 3/1/18</small>
                        </div>
                    </div>
                    <hr>
                    <a href="#" class="btn hvr-hover">Tambah Ulasan</a>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Produk Sejenis</h1>
                </div>

                <div class="featured-products-box owl-carousel owl-theme">
                    <?php foreach ($produk_related as $produk_related) : ?>

                        <!-- form untuk memproses belanjaan -->
                        <form action="<?= base_url('belanja/add'); ?>" method="POST">
                            <?php
                            // element yang dibawa
                            echo form_hidden('id', $produk_related['id_produk']);
                            echo form_hidden('qty', 1);
                            echo form_hidden('price', $produk_related['harga']);
                            echo form_hidden('name', $produk_related['nama_produk']);
                            //elemet redirect
                            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));

                            ?>

                            <div class="item">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <img src="<?= base_url('assets/upload/image/' . $produk_related['gambar']); ?>" class="img-fluid" alt="<?= $produk_related['nama_produk']; ?>" class="img-fluid" alt="<?= $produk_related['nama_produk']; ?>">
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="<?= base_url('produk/detail/' . $produk_related['slug_produk']) ?>" data-toggle="tooltip" data-placement="right" title="Detail"><i class="fas fa-eye"></i></a></li>

                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Tambah Favorit"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <button type="submit" class="invisible" value="submit"><a class="cart visible">Tambah Keranjang</a></button>
                                        </div>
                                    </div>
                                    <div class="why-text">
                                        <h4><?= $produk['nama_produk']; ?></h4>
                                        <h5> Rp.<?= number_format($produk_related['harga'], '0', ',', '.'); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </form>



                    <?php endforeach; ?>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->