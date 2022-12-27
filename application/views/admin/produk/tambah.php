<div class="row">
    <div class="col-lg-4">
        <?php
        if (isset($error)) {
            echo '<p class="alert alert-warning">';
            echo $error;
            echo '</p>';
        }        //notifikasi error
        echo validation_errors('<div class="alert alert-warning">', '</div>');
        ?>
    </div>
</div>
<div class="box box-info">
    <div class="box-header with-border">
        <form action="<?= base_url('admin/produk/tambah'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-md-8 col-sm-8">
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value=" <?= set_value('nama_produk'); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode_produk" class="col-sm-2 col-form-label">Kode Produk</label>
                <div class="col-md-5 col-sm-5">
                    <input type="text" class="form-control" id="kode_produk" name="kode_produk" value=" <?= set_value('kode_produk'); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="id_kategori" class="col-sm-2 col-form-label">Kategori Produk</label>
                <div class="col-md-5 col-sm-5">
                    <select name="id_kategori" id="id_kategori" class="form-control">
                        <?php foreach ($kategori as $kategori) : ?>
                            <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-md-5 col-sm-5">
                    <input type="number" class="form-control" id="harga" name="harga" value=" <?= set_value('harga'); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-md-5 col-sm-5">
                    <input type="number" class="form-control" id="stok" name="stok" value=" <?= set_value('stok'); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                <div class="col-md-5 col-sm-5">
                    <input type="text" class="form-control" id="berat" name="berat" value=" <?= set_value('berat'); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
                <div class="col-md-5v col-sm-5">
                    <input type="text" class="form-control" id="ukuran" name="ukuran" value=" <?= set_value('ukuran'); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="editor" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-md-8 col-sm-8">
                    <textarea class="form-control" id="editor" name="keterangan" value=" <?= set_value('keterangan'); ?>" required>
                         <?= set_value('keterangan'); ?> 
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                <div class="col-md-8 col-sm-8">
                    <textarea class="form-control" id="keyword" name="keyword" value=" <?= set_value('keyword'); ?>" required>
                         <?= set_value('keyword'); ?> 
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="gambar" class="col-sm-2 col-form-label">Upload Gambar Produk</label>
                <div class="col-md-2 col-sm-5">
                    <input type="file" name="gambar" id="gambar" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="status_produk" class="col-sm-2 col-form-label">Status Produk</label>
                <div class="col-md-2 col-sm-5">
                    <select name="status_produk" id="status_produk" class="form-control">
                        <option value="Publish">Publikasikan</option>
                        <option value="Draft">Simpan Sebagai Draft</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-5 col-sm-5">
                    <button class="btn btn-success btn-lg" name="submit" type="submit">
                        <i class="fa fa-save"></i>
                        Simpan
                    </button>
                    <button class="btn btn-info btn-lg" name="reset" type="reset">
                        <i class="fa fa-times"></i>
                        Reset
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>