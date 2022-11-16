<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <h1 class="mt-2 mb-3">Daftar Komik</h1>
    <a href="/komik/create" class="btn btn-primary mb-3">Tambah Data Komik</a>
    <?php if (session()->getFlashdata('Pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('Pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><img src="/img/<?= $row['sampul']; ?>" width="100px" alt=""></td>
                            <td><?= $row['judul']; ?></td>
                            <td><a href="/komik/detail/<?= $row['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>