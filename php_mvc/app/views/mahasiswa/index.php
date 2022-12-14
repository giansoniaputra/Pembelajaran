<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>DAFTAR MAHASISWA</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tambahData" data-bs-toggle="modal" data-bs-target="#Modal">
                Tambah Data Mahasiswa
            </button>
            <br><br>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item ">
                        <?= $mhs['Nama']; ?>
                        <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge text-bg-danger float-end me-2" onclick="return confirm('Yakin Ingin Menghapus Data?')">Delete</a>
                        <a href="<?= BASEURL ?>/mahasiswa/ubah/" class="badge text-bg-success float-end me-2 tampilModalUbah" id="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#Modal" data-id="<?= $mhs['id'];?>">Edit</a>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary float-end me-2">Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModal">Tambahkan Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" id="id" name="id">
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukan Nama Mahasiswa" required>
                    </div>
                    <!-- NPM -->
                    <div class="mb-3">
                        <label for="NPM" class="form-label">NPM</label>
                        <input type="number" class="form-control" id="NPM" placeholder="Masukan NPM Mahasiswa" name="NPM" required>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                    </div>
                    <!-- jurusan -->
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" name="jurusan" required id="jurusan">
                            <option value="">Pilih Jurusan...</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="TKJ">TKJ</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="simpan">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>