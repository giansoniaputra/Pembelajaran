<?php
include 'function.php';

$query = query("SELECT * FROM t_ktp_robi");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            display: grid;
            font-family: 'Poppins', sans-serif;
            position:relative;
            justify-content: center;
        }

        .input {
            display: grid;
            position: absolute;
            grid-template-columns: 1fr;
            gap: 10px;
            background-color: #ccc;
            padding: 50px;
            border-radius: 15px;
        }
    </style>
    <title>Data Penduduk</title>
</head>

<body>
    <div class="content">
        <h2 align="center">Data Penduduk</h2>
        <a href="input.php">Tambah Data Penduduk</a>
        <table align="center" border="1px" cellpading="0px" cellspacing="0px" width="800px">
            <tr>
                <th>No</th>
                <th>No Penduduk</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Pekerjaan</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Email</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Pendaftaran</th>
                <th> </th>
            </tr>

            <?php
            $i = 1;
            ?>

            <?php foreach ($query as $row) : ?>

                <tr>
                    <th><?= $i ?></th>
                    <th><?= $row["nopen_robi"] ?></th>
                    <th><?= $row["nama_robi"] ?></th>
                    <th><?= $row["tempatlahir_robi"] ?></th>
                    <th><?= $row["tanggallahir_robi"] ?></th>
                    <th><?= $row["pekerjaan_robi"] ?></th>
                    <th><?= $row["status_robi"] ?></th>
                    <th><?= $row["alamat_robi"] ?></th>
                    <th><?= $row["agama_robi"] ?></th>
                    <th><?= $row["email_robi"] ?></th>
                    <th><?= $row["provinsi_robi"] ?></th>
                    <th><?= $row["kota_robi"] ?></th>
                    <th><?= $row["kecamatan_robi"] ?></th>
                    <th><?= $row["tglpendaftaran_robi"] ?></th>
                    <th><?= $row["blnpendaftaran_robi"] ?></th>
                    <th> <a href="edit.php?nopen_robi=<?= $row["nopen_robi"] ?>">Edit</a>
                        <a href="delete.php?nopen_robi=<?= $row["nopen_robi"] ?>">Delete</a>
                    </th>
                    </td>
                </tr>
                </tr>
                <?= $i++ ?>

            <?php endforeach; ?>
    </div>

    <div class="input">
        <form method="post" action="">
            <h2>TAMBAH DATA PENDUDUK</h2>
            <label for="nama_robi">Nama :</label>
            <input type="text" name="nama_robi" id="nama_robi" required>

            <label for="tempatlahir_robi">Tempat Lahir :</label>
            <input type="text" name="tempatlahir_robi" id="tempatlahir_robi" required>

            <label for="tanggallahir_robi">Tanggal Lahir :</label>
            <input type="date" name="tanggallahir_robi" id="tanggallahir_robi" required>

            <label for="pekerjaan_robi">Pekerjaan :</label>
            <input type="text" name="pekerjaan_robi" id="pekerjaan_robi" required>

            <label for="status_robi">Status</label>
            <select name="status_robi" id="status_robi" required>
                <option value="">PILIH...</option>
                <option value="MENIKAH">MENIKAH</option>
                <option value="BELUM MENIKAH">BELUM MENIKAH</option>
            </select>

            <label for="alamat_robi">Alamat :</label>
            <input type="text" name="alamat_robi" id="alamat_robi" required>

            <label for="agama_robi">Agama</label>
            <select name="agama_robi" id="agama_robi" required>
                <option value="">PILIH...</option>
                <option value="ISLAM">MENIKAH</option>
                <option value="KATHOLIK">KATHOLIK</option>
                <option value="PROTESTAN">PROTESTAN</option>
                <option value="HINDU">HINDU</option>
                <option value="BUDHA">BUDHA</option>
                <option value="KONGHUCU">KONGHUCU</option>
            </select>

            <label for="pekerjaan_robi">Pekerjaan :</label>
            <input type="text" name="pekerjaan_robi" id="pekerjaan_robi" required>
            <label for="pekerjaan_robi">Pekerjaan :</label>
            <input type="text" name="pekerjaan_robi" id="pekerjaan_robi" required>
            <label for="pekerjaan_robi">Pekerjaan :</label>
            <input type="text" name="pekerjaan_robi" id="pekerjaan_robi" required>
            <label for="pekerjaan_robi">Pekerjaan :</label>
            <input type="text" name="pekerjaan_robi" id="pekerjaan_robi" required>
            <label for="pekerjaan_robi">Pekerjaan :</label>
            <input type="text" name="pekerjaan_robi" id="pekerjaan_robi" required>


        </form>
    </div>

</body>

</html>