<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>DAFTAR MAHASISWA</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['Nama']; ?>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary ">Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>