<?php
//load data konfigurasi website
$site = $this->konfigurasi_model->listing();
$nav_produk = $this->konfigurasi_model->nav_produk();
?>

<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Waktu Kerja</h3>
                        <ul class="list-time">
                            <li>Monday - Friday: 08.00am to 05.00pm</li>
                            <li>Saturday: 10.00am to 08.00pm</li>
                            <li>Sunday: <span>Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Email</h3>
                        <form class="newsletter-box">
                            <div class="form-group">
                                <input class="" type="email" name="Email" placeholder="Email Address*" />
                                <i class="fa fa-envelope"></i>
                            </div>
                            <button class="btn hvr-hover" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Social Media</h3>
                        <ul>
                            <li><a href="<?= $site['facebook']; ?>"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?= $site['instagram']; ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <h4>Tentang <?= $site['namaweb'] ?></h4>
                        <p><?= $site['deskripsi']; ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Kategori Produk</h4>
                        <ul>
                            <?php foreach ($nav_produk as $nav) : ?>
                                <li>
                                    <p><a href="<?= base_url('produk/kategori/' . $nav['slug_kategori']); ?>"><?= $nav['nama_kategori']; ?> </a></p>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Tentang Kami</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i><?= $site['alamat']; ?> </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <?= $site['telepon']; ?></a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <?= $site['email']; ?>:</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">All Rights Reserved. &copy; <?= date('Y'); ?> <a href="<?= base_url(); ?>"><?= $site['namaweb']; ?></a> Develope By :
        <a href="#">Redha</a></p>
</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="<?= base_url('assets/template/'); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="<?= base_url('assets/template/'); ?>js/jquery.superslides.min.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/bootstrap-select.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/inewsticker.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/bootsnav.js."></script>
<script src="<?= base_url('assets/template/'); ?>js/images-loded.min.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/isotope.min.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/baguetteBox.min.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/form-validator.min.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/contact-form-script.js"></script>
<script src="<?= base_url('assets/template/'); ?>js/custom.js"></script>

</script>
</body>

</html>