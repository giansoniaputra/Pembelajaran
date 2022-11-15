<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <h1 class="mt-2 mb-3">Daftar Komik</h1>
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
                            <td><a href="" class="btn btn-success">Detail</a></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>