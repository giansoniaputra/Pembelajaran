<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="my-4">Tambah Data Komik</h2>
            <form action="<?= base_url(); ?>/komik/update/<?= $komik['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label me-5">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul']  ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label me-5">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" name="penulis" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" value="<?= $komik['penulis'];; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('penulis'); ?>
                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label me-5">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" name="penerbit" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penerbit" value="<?= $komik['penerbit']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('penerbit'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label me-5">sampul</label>
                    <div class="col-sm-10">
                        <input type="text" name="sampul" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="sampul" value="<?= $komik['sampul'];; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('sampul'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>