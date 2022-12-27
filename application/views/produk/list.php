<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?= $subtitle; ?></h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Produk</a></li>
                    <?php if (isset($kategori['nama_kategori'])) : ?>
                        <li class="breadcrumb-item active"><?= $kategori['nama_kategori']; ?></li>
                    <?php else : ?>
                        <li class="breadcrumb-item active">Semua Produk</li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-sm-9 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center text-sm-left">
                            <div class="toolbar-sorter-right">


                            </div>
                            <span><?= $site['namaweb'] . ', ' . $site['tagline']; ?></p>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    <?php foreach ($produk as $produk) : ?>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <form action="<?= base_url('belanja/add'); ?>" method="POST">
                                                <?php
                                                // element yang dibawa
                                                echo form_hidden('id', $produk['id_produk']);
                                                echo form_hidden('qty', 1);
                                                echo form_hidden('price', $produk['harga']);
                                                echo form_hidden('name', $produk['nama_produk']);
                                                //elemet redirect
                                                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));

                                                ?>
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="<?= base_url('assets/upload/image/thumbs/' . $produk['gambar']); ?>" class="img-fluid" alt="<?= $produk['nama_produk'] ?>">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="<?= base_url('produk/detail/') . $produk['slug_produk']; ?>" data-toggle="tooltip" data-placement="right" title="Detail"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Tambah Favorit"><i class="far fa-heart"></i></a></li>
                                                            </ul>
                                                            <button type="submit" class="invisible" value="submit"><a class="cart visible">Tambah Keranjang</a></button>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <h4><?= $produk['nama_produk']; ?></h4>
                                                        <h5>Rp. <?= number_format($produk['harga'], '0', ',', '.'); ?></h5>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>


                            <!-- pagination -->
                            <div class="pagination flex-m flex-w p-t-26">
                                <?= $pagin; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-3 col-xs-12 sidebar-shop-left">
                <div class="product-categori">

                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>kategori Produk</h3>
                        </div>

                    </div>
                    <?php foreach ($listing_kategori as $listing_kategori) : ?>
                        <a href="<?= base_url('produk/kategori/' . $listing_kategori['slug_kategori']); ?>" class="list-group-item list-group-item-action"><?= $listing_kategori['nama_kategori']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->