<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="my-4">Tambah Data Komik</h2>

            <form action="/komik/save" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label me-5">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" class="form-control" id="judul" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label me-5">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" name="penulis" class="form-control" id="penulis">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label me-5">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" name="penerbit" class="form-control" id="penerbit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label me-5">sampul</label>
                    <div class="col-sm-10">
                        <input type="text" name="sampul" class="form-control" id="sampul">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>