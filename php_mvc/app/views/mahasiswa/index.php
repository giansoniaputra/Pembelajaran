<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>DAFTAR MAHASISWA</h3>
           
                <?php foreach($data['mhs'] as $mhs) :?>
                    <ul>
                        <li><?= $mhs['Nama']; ?></li>
                        <li><?= $mhs['NPM']; ?></li>
                        <li><?= $mhs['email']; ?></li>
                        <li><?= $mhs['jurusan']; ?></li>
                    </ul>
                    <?php endforeach; ?>
            
        </div>
    </div>
</div>