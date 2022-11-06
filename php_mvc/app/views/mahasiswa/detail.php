<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['Nama'] ?></h5>
            <p class="card-text"><?= $data['mhs']['NPM'] ?></p>
            <p class="card-text"><?= $data['mhs']['email'] ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan'] ?></p>
            <a href="<?= BASEURL ?>/mahasiswa" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>