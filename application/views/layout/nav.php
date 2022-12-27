<?php
//ambil data menu
$site = $this->konfigurasi_model->listing();
$nav_produk = $this->konfigurasi_model->nav_produk();
$nav_produk_mobile = $this->konfigurasi_model->nav_produk();

?>
<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand " href="<?= base_url(); ?>" style="color:green;font-size:40px;font-weight: bold;"><?= $site['namaweb']; ?></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="<?= base_url(); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">PRODUK</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($nav_produk as $nav) : ?>
                                <li><a href="<?= base_url('produk/kategori/' . $nav['slug_kategori']); ?>"><?= $nav['nama_kategori'] ?></a></li>
                            <?php endforeach; ?>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ITEM</a>
                        <ul class="dropdown-menu">
                            <li><a href="keranjang.html">Keranjang</a></li>
                            <li><a href="bayar.html">Pesanan</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">Favorit</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('kontak'); ?>">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <?php
            //cek data belanjaan ada atau tidak
            $keranjang = $this->cart->contents();

            ?>
            <div class="attr-nav">
                <ul>
                    <!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->
                    <li class="side-menu">
                        <a href="<?= base_url('belanja'); ?>">
                            <p>Cart</p>
                            <i class="fa fa-cart-plus  "></i>
                            <span class="badge"><?= count($keranjang); ?></span>
                        </a>
                    </li>
                    <li>
                        <?php if ($this->session->userdata('email')) : ?>
                            <a href="<?= base_url('dashboard'); ?>">
                                <?php $nama_user = $this->session->userdata('nama_pelanggan');
                                $nama_user = explode(' ', $nama_user);
                                ?>
                                <i class="fa fa-user "></i> <?= $nama_user[0];  ?>
                            </a>
                        <?php else : ?>
                            <a href="<?= base_url('registrasi'); ?>">
                                <i class="fa fa-user s_color"></i> Login/Register
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->