<div class="row">
    <div class="col-lg-12">
        <div class="title-all text-center">
            <h1>PRODUK TERBARU</h1>

        </div>
    </div>
</div>

<div class="product-categorie-box">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
            <div class="row">
                <?php foreach ($produk as $produk) : ?>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <!-- form untuk memproses belanjaan -->
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
                                    <img src="<?= base_url('assets/upload/image/' . $produk['gambar']); ?>" class="img-fluid" alt="<?= $produk['nama_produk']; ?>">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="<?= base_url('produk/detail/' . $produk['slug_produk']) ?>" data-toggle="tooltip" data-placement="right" title="Detail"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Tambah Favorit"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <button type="submit" class="invisible" value="submit"><a class="cart visible">Tambah Keranjang</a></button>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><?= $produk['nama_produk']; ?></h4>
                                    <h5> Rp.<?= number_format($produk['harga'], '0', ',', '.'); ?></h5>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>SMARTPHONE</h1>
                    <p>Smartphone kualitas terbaik dengan harga termurah</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">Terbaru</button>
                        <button data-filter=".top-featured">Teratas</button>
                        <button data-filter=".best-seller">Terlaris</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="<?= base_url('assets/template/images/'); ?>Samsung/S/S10-plus.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="S10-plus-detail.html" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="keranjang.html">Tambah Keranjang</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Samsung Galaxy S10 Plus</h4>
                        <h5> Rp.15.000.000</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">New</p>
                        </div>
                        <img src="<?= base_url('assets/template/images/'); ?>Samsung/Note/Note10-plus.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Tambah Keranjang</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Samsung Galaxy Note 10 Plus</h4>
                        <h5> Rp.14.500.000</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="<?= base_url('assets/template/images/'); ?>Samsung/A/A80.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Tambah Keranjang</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Samsung Galaxy A80</h4>
                        <h5> Rp.8.500.000</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">New</p>
                        </div>
                        <img src="<?= base_url('assets/template/images/'); ?>Samsung/M/M40.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Tambah Keranjang</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Samsung Galaxy M40</h4>
                        <h5> Rp.4.500.000</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products  -->