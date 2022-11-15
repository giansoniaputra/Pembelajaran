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
    <title><?= $title; ?></title>
</head>

<body>

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
</body>




</html>