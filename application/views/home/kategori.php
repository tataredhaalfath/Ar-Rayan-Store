<!-- Start Categories  -->

<div class="categories-shop">
    <div class="col-lg-12">
        <div class="title-all text-center">
            <h1>KATEGORI</h1>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($kategori as $kategori) : ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/upload/image/' . $kategori['gambar']); ?>" alt="" />
                        <a class="btn hvr-hover" href="<?= base_url('produk/kategori/' . $kategori['slug_kategori']) ?>"><?= $kategori['nama_kategori']; ?></a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- End Categories -->