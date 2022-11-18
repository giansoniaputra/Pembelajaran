<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/') ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="header">
        <div class="containerss">
            <nav>
                <h2>GIAN SONIA</h2>
                <div class="list">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="<?= base_url(); ?>/komik">Komik</a></li>
                        <li><a href="#sosmed">Social Media</a></li>
                        <li><button type="button" class="btn btn-press">Hire Me+ ✉</button></li>
                    </ul>
                </div>

            </nav>

            <?= $this->renderSection('content'); ?>

            <footer>
                <div class="footer">
                    <h2>Gian Sonia</h2>
                    <p>082321634181</p>
                    <p>giansonia19@gmail.com</p>
                    <div class="sosmed" id="sosmed">
                        <a href="https://www.instagram.com/giansonia.io" target="_blank"> <img src="img/icon/ig.png" alt=""></a>
                        <a href="https://www.facebook.com/gian.lisda" target="_blank"><img src="img/icon/ig(1).png" alt=""></a>
                        <a href="https://wa.me/6282321634181" target="_blank"><img src="img/icon/ig(2).png" alt=""></a>
                        <a href="https://www.tiktok.com/@giansonia.io" target="_blank"><img src="img/icon/ig(3).png" alt=""></a>
                    </div>
                    <p>Copyright 2022, All Right Reserved</p>
                </div>
            </footer>

            <script>
                function previewImg() {
                    const sampul = document.querySelector('#sampul');
                    const imgPreview = document.querySelector('.img-preview');

                    const fileSampul = new FileReader();
                    fileSampul.readAsDataURL(sampul.files[0]);

                    fileSampul.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            </script>
</body>




</html>