<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="hero">
    <div class="judul">
        <p>------- Gian Sonia</p>
        <h2>Hello, my name is
            Gian Sonia.</h2>
        <h2>I'm Graphic Designer
            and Front End Developer</h2>
        <a href="https://wa.me/6282321634181" target="_blank"><button type="button" class="btn btn-press">Contact Me
                ➡</button></a>
    </div>
    <div class="icon">
        <img src="<?= base_url('/') ?>/img/icon/html5_color.png" alt="">
        <img src="<?= base_url('/') ?>/img/icon/css_color.png" alt="">
        <img src="<?= base_url('/') ?>/img/icon/illustrator_color.png" alt="">
    </div>
    <div class="png">
        <img src="<?= base_url('/') ?>/img/gian.png" alt="">
    </div>
</div>
</div>
</div>

<section class="skill">
    <div class="containerss">
        <div class="img">
            <i><img src="<?= base_url('/') ?>/img/icon/html.png" alt=""></i>
            <i><img src="<?= base_url('/') ?>/img/icon/css.png" alt=""></i>
            <i><img src="<?= base_url('/') ?>/img/icon/php.png" alt=""></i>
            <i><img src="<?= base_url('/') ?>/img/icon/adobe-illustrator.png" alt=""></i>
            <i><img src="<?= base_url('/') ?>/img/icon/photoshop.png" alt=""></i>
            <i><img src="<?= base_url('/') ?>/img/icon/premier.png" alt=""></i>
        </div>
    </div>
</section>

<section class="skill2">
    <div class="text">
        <h3 style="color:#41B883; margin-bottom: 10px;">What I Do</h3>
        <h2 style="font-size: 3em ; margin-bottom: 20px;">Service Offer</h2>
        <p>Saya menawarkan jasa pembuatan Website dan jasa pembuatan Desain Grafis dari mulai Logo, Desain
            Benner, Desain Pamflet dab berbagai kebutuhan desain lainnya</p>
    </div>
    <div class="button">
        <div class="card">
            <img src="<?= base_url('/') ?>/img/Desain.png" alt="">
            <h2>Desainer Grafis</h2>
            <p>Saya adalah orang yang mampu untuk membuat desain diantaranya desain Logo, Pamflet dan lainyya
            </p>
            <button type="button">See More ➡</button>
        </div>
        <div class="card">
            <img src="<?= base_url('/') ?>/img/Website.png" alt="">
            <h2>Front End Develover</h2>
            <p>Saya adalah orang yang mampu untuk membuat Front End sebuah website</p>
            <button type="button">See More ➡</button>
        </div>
    </div>

</section>

<section class="experience">
    <div class="containerss">
        <p>------- Graphic Designer</p>
        <h2>With 3 years <br> Experience <br> Graphic <br> Designer</h2>
        <p>Selama tiga tahun ini saya telah mengerjakan banyak projek desain <br> diantaranya desain logo,
            Pamflet
            dan lainnya.</p>
        <a href="https://wa.me/6282321634181" target="_blank"><button type="button" class="btn-press" style="padding: 20px 70px; font-size: 1.2em; margin-top: 40px ; background-color: white; color:#41B883">Contact
                Me
            </button></a>
    </div>
</section>


<section class="school">
    <div class="foto">
        <img src="<?= base_url('/') ?>/img/teamwork.png" alt="">
    </div>
    <div class="jelas">
        <p>------- Why Choose Us </p>
        <h2>Cepat dan Kualitas <br> Produk</h2>
        <p>Dua alasan kenapa anda harus memilih kami</p>
        <div class="card">
            <img src="<?= base_url('/') ?>/img/icon/cepat.png" alt="">
            <h3>Apapun yang anda inginkan, kami akan selesaikan dalam waktu singkat</h3>
        </div>
        <div class="card">
            <img src="<?= base_url('/') ?>/img/icon/kualitas.png" alt="">
            <h3>Kami menjanjikan kualitas yang terbaik bagi desain anda</h3>
        </div>
    </div>
</section>

<section class="portfolio">
    <div class="containerss"></div>
    <div class="bg">
        <div class="container bag1">
            <p>------- Project</p>
            <h2>Selected Project</h2>
            <p>Ini merupakan beberapa hasil dari project yang telah kami kerjakan</p>
        </div>
    </div>
    <div class="bag2">
        <div class="card2">
            <img src="<?= base_url('/') ?>/img/portfolio/warung ohay.png" alt="">
            <div class="text">
                <h2>Logo Warung Ohay</h2>
                <p>Desain LOGO</p>
            </div>
        </div>
        <div class="card2">
            <img src="<?= base_url('/') ?>/img/portfolio/website.png" alt="">
            <div class="text">
                <h2>UI Desain</h2>
                <p>UI Desain</p>
            </div>
        </div>
        <div class="card2">
            <img src="<?= base_url('/') ?>/img/portfolio/logo.png" alt="">
            <div class="text">
                <h2>Pamflet Promosi</h2>
                <p>Desain Pamflet</p>
            </div>
        </div>
        <div class="card2">
            <img src="<?= base_url('/') ?>/img/portfolio/baju.png" alt="">
            <div class="text">
                <h2>Liga Film Mahasiswa</h2>
                <p>Desain Baju</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>

<!-- <section class="school">
        <div class="foto">
            <img src="img/LRM_EXPORT_313399679268419_20190310_133647796.jpeg" alt="">
        </div>
        <div class="jelas">
            <p>------- Pendidikan</p>
            <h2 style="font-size: 30px;">Riwayat Pendidikan</h2>
            <p>Saya sekarang sedang menginjak bangku kuliah tingkat akhir di kampus STMIK Tasikmalaya</p>
            <div class="card">
                <img src="img/icon/s1.png" alt="">
                <h3>MI TARBIYYATUL UMMAH</h3>
            </div>
            <div class="card">
                <img src="img/icon/s2.png" alt="">
                <h3>MTS LISDA PASIRANGIN</h3>
            </div>
            <div class="card">
                <img src="img/icon/s3.png" alt="">
                <h3>MAN 2 KOTA TASIKMALAYA</h3>
            </div>
            <div class="card">
                <img src="img/icon/s3.png" alt="">
                <h3>STMIK TASIKMALAYA</h3>
            </div>
        </div>
    </section> -->