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
                <h2><?= $title; ?></h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><?= $title; ?></li>
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
            <div class="col-lg-12 col-md-12">
                <p class="alert alert-success"> Sudah memiliki akun ? Silahkan <a href="<?= base_url('masuk'); ?>" class="btn btn-info btn-sm">Login disini</a></p>
            </div>
            <div class="col-md-12 col-lg-12">
                <?= validation_errors('<div class="alert alert-warning">', '</div>') ?>
                <form action="<?= base_url('registrasi'); ?>" class="leave-comment" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th><input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" placeholder="nama" value="<?= set_value('nama_pelanggan'); ?>" required></th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" id="email" class="form-control" placeholder="email" value="<?= set_value('email'); ?>" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" id="password" class="form-control" placeholder="password" value="<?= set_value('password'); ?>" required></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td><input type="text" name="telepon" id="telepon" class="form-control" placeholder="telepon" value="<?= set_value('telepon'); ?>" required></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="textarea" name="alamat" id="alamat" class="form-control" placeholder="alamat" value="<?= set_value('alamat'); ?>" required></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-success btn-lg">
                                        <i class="fa fa-save"></i> Register
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