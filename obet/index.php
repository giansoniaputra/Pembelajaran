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
    <title>Data Penduduk</title>
</head>

<body>
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



</body>

</html>