<?php
$site = $this->konfigurasi_model->listing();
?>
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="<?= base_url('assets/template/images/'); ?>Samsung/Banner/1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> <?= $site['namaweb']; ?></strong></h1>
                        <p class="m-b-40">Nikmati kebebasan belanja sekarang hanya dalam satu genggaman</p>

                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="<?= base_url('assets/template/images/'); ?>Samsung/Banner/2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> <?= $site['namaweb']; ?></strong></h1>
                        <p class="m-b-40">Nikmati kebebasan belanja sekarang hanya dalam satu genggaman</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="<?= base_url('assets/template/images/'); ?>Samsung/Banner/4.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> <?= $site['namaweb']; ?></strong></h1>
                        <p class="m-b-40">Nikmati kebebasan belanja sekarang hanya dalam satu genggaman</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->