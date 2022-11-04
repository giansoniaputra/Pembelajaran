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
        .input {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            width: 50%;
            margin: auto;
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>Input Data</title>
</head>

<body>
    <form method="post" action="">
        <div class="input">
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

        </div>
    </form>
</body>

</html>