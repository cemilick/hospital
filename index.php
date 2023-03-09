<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit Brayat Minulya Surakarta </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

        <a href="#" class="logo">
            <img src="image/logoRS.png" alt="">
            <font size="4">RS Brayat Minulya</font>
        </a>
    </div>

    <nav class="navbar">
        <a href="#home">Beranda</a>
        <a href="#services">Layanan</a>
        <li class="dropdown">
            <a href="#about" class="dropbtn">Tentang Kami</a>
            <div class="dropdown-content">
                <a href="#">Sejarah</a>
                <a href="#">Visi dan Misi</a>
                <a href="#">Struktur Organisasi</a>
            </div>
        </li>
        <a href="#doctors">Jadwal Dokter</a>
        <a href="#book">Reservasi</a>
        <a href="#review">Testimoni</a>
        <a href="#blogs">Berita</a>
        <a href="#contacts">Kontak</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<style>
    .logo-container {
        display: flex;
        align-items: center;
    }
    .logo img {
        height: 50px;
        margin-right: 10px;
        margin-bottom: -20px;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        z-index: 1;
    }
    .dropdown-content a {
        margin: 10px 0;
        width: 150px;
        color: black;
        text-decoration: none;
        display: block;
    }
    .dropdown:hover .dropdown-content {
        display: block;
        background-color: white;
    }
</style>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>Selamat Datang Di Website Resmi Rumah Sakit Brayat Minulya</h3>
        <p>Kami berkomitmen untuk memberikan pelayanan kesehatan terbaik bagi Anda dan keluarga. Terima kasih telah memilih Rumah Sakit kami sebagai mitra kesehatan Anda. Integritas Tinggi, Melayani Dengan Sepenuh Hati</p>
        <a href="#services" class="btn"> Selengkapnya Tentang Kami <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>Dokter Ahli dan Staff</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>Kepuasan Pasien</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>Fasilitas Kamar</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>Ruang Tunggu Pasien</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> layanan yang <span>kami sediakan</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Pemeriksaan Gratis</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 Ambulans Tersedia</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Dokter Berpengalaman</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Apotik Terlengkap</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Fasilitas Kamar</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Perawatan Total</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>tentang</span> kami </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> jadwal <span>Dokter</span> </h1>

    <div class="box-container">
        <?php 
            include 'admin/database/koneksi.php';

            $query = "SELECT * FROM `jadwal`";

            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0):
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <div class="box">
            <?php 
                $imgBerita = explode("/", $row['picture'])[4];
                $imgBerita = "admin/images/dokter/" . $imgBerita; 
            ?>
            <img src="<?= $imgBerita ?>" alt="">
            <h3><?= $row['nama_dokter'] ?></h3>
            <span><?= $row['pelayanan'] ?></span>
            <?php $masuk = date_create($row['jadwal_masuk']); ?>
            <?php $pulang = date_create($row['jadwal_pulang']); ?>
            <h4><?= date_format($masuk, 'l, d-m-Y') ?></h4>
            <h5><?= date_format($masuk, 'H:i') ?> WIB - <?= date_format($pulang, 'H:i') ?> WIB</h5>
            <div class="share">
                <a href="https://facebook.com/freewebsitecode/" class="fab fa-facebook-f"></a>
                <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos" class="fab fa-youtube"></a>
                <a href="https://freewebsitecode.com" class="fab fa-twitter"></a>
                <a href="https://freewebsitecode.com" class="fab fa-instagram"></a>
                <a href="https://freewebsitecode.com" class="fab fa-linkedin"></a>
            </div>
        </div>
        <?php
        endwhile;
            else:
                ?>
                 <div class="box">
                <div class="content">
                    <h4>Belum ada Jadwal Dokter diterbitkan.</h4>
                </div>
                </div>
                <?php
            endif;
        ?>

    </div>

</section>

<!-- doctors section ends -->

<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>reservasi</span> sekarang </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form action="">
            <h3>Reservasi Online</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="number" placeholder="your number" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="date" class="box">
            <input type="submit" value="booking" class="btn">
        </form>

    </div>

</section>

<!-- booking section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> Kepuasan <span>pasien</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>Vincent Irbad</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Saya sangat terkesan dengan pelayanan yang diberikan oleh seluruh staff rumah sakit ini. Mereka sangat perhatian dan ramah, membuat saya merasa nyaman selama berada di sini!</p>
        </div>

        <div class="box">
            <img src="image/pic-2.png" alt="">
            <h3>Nunung Samantha</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Saya merasa sangat terbantu oleh seluruh staff rumah sakit ini, terutama ketika saya membutuhkan bantuan darurat. Mereka sangat sigap dan tanggap dalam menangani situasi saya.</p>
        </div>

        <div class="box">
            <img src="image/pic-3.png" alt="">
            <h3>John Wick</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Saya sangat terkesan dengan fasilitas yang disediakan oleh rumah sakit ini. Semua peralatan medis yang diperlukan tersedia dengan baik, dan lingkungan rumah sakit sangat bersih dan nyaman.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> Berita <span>Terkini</span> </h1>

    <div class="box-container">
        <?php 
            include 'admin/database/koneksi.php';

            $query = "SELECT * FROM `berita`";

            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0):
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <div class="box">
            <div class="image">
                <?php 
                    $imgBerita = explode("/", $row['picture'])[4];
                    $imgBerita = "admin/images/berita/" . $imgBerita; 
                ?>
                <img src="<?= $imgBerita ?>" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> <?= $row['created_at'] ?> </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3><?= $row['judul'] ?></h3>
                <p><?= substr($row['isi'], 0, 150) ?> ...</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <?php 
        endwhile;
        else : 
            ?>
            <div class="box">
                <div class="content">
                    <h4>Belum ada Berita diterbitkan.</h4>
                </div>
                </div>
                <?php
        endif;
        ?>
    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer" id="contacts">

    <h1 class="heading"> <span> kontak </span>kami</h1>

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Beranda </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Layanan </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Tentang Kami </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Jadwal Dokter </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Reservasi </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Berita </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Poli Kesehatan </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Instalasi Gawat Darurat </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Kardiologi </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Servis Ambulans </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 0271-8849-5422 </a>
            <a href="#"> <i class="fas fa-phone"></i> 0821-3432-4541 </a>
            <a href="#"> <i class="fas fa-envelope"></i> rsbmsolo@gmail.com </a>
            <a href="#"> <i class="fas fa-globe"></i> www.RumahSakitBM.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Surakarta - Indonesia </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/profile.php?id=100075983150519&locale=eo_EO"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-youtube"></i> youtube </a>
            <a href="https://www.instagram.com/rs.brayatminulya/"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>
    </div>

    <div class="credit"> created by <span><a href="#">Swarna Dwi Jaya Wardhana</a></span> | 2023 @ all rights reserved </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>