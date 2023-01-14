<?php

// $data = file_get_contents('https://kawalcovid19.harippe.id/api/summary');
// $data_js = json_decode($data, true);


// $confirmed = implode(" ", $data_js['confirmed']);
// $recovered = implode(" ", $data_js['recovered']);
// $deaths = implode(" ", $data_js['deaths']);
// $activeCare = implode(" ", $data_js['activeCare']);
// $lastUpdatedAt = implode(" ", $data_js['metadata']);

//proses
$filecounter=("view.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;
$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#FE3071">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/font-face.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/scrollToTop.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/image/icon.png">
    <title>Covid19 Information - RipLabs</title>
    <style type="text/css">
        .jumbotron {
            background: url('assets/image/BG_Desktop.png');
            color: white;
            background-size: cover;
            background-repeat: no-repeat;
            padding: 250px 0 250px 0;
        }
        .navbar-brand img {
            width: 200px;
        }
        .btn-pink {
            background: #FE3071 !important;
            border:2px solid #FE3071 !important;
            color: white;
        }
        .btn-circle {
            border-radius: 50px;
            font-family: gravity;
            font-weight: bold;
            padding: 10px 15px;
            box-shadow: 2px 2px 10px rgba(254,48,113,0.5);
        }
        .btn-pink:hover {
            transition-duration: 400ms;
            color: #FE3071 !important;
            background: white !important;
        }
        .list-kenal {
            list-style: none;
            margin-left: -40px;
        }
        .btn-kenal {
            font-family: gravity;
            padding: 20px;
            width: 100%;
            font-size: 20px;
            color: #333;
            margin: 20px 0;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
            position: relative;
            border-radius: 15px;
            overflow: auto;
        }
        .btn-kenal:hover {
            background: #ddd;
            box-shadow: 3px 3px 15px rgba(0,0,0,0.2);
        }
        .btn-kenal:hover > img {
            transform: scale(1.1);
            transition-duration: 200ms;
        }
        .list-kenal a:hover {
            text-decoration: none;
        }
        .btn-kenal img {
            width: 50px;
        }
        .btn-kenal .arrow {
            float: right;
            margin-right: 30px;
            margin-top: 10px;
        }
        .btn-kenal:hover > .arrow {
            transition-duration: 300ms;
            margin-right: 10px;
        }
        .col-gejala {
            background:white;
            color: #333;
            padding:30px 20px;
            margin: 10px;
            border-radius:15px;
            font-weight: bold;
            font-family: montserrat-bold;
            text-align:center;
        }
        .col-gejala:hover {
            transform: scale(1.07);
            transition-duration: 300ms;
        }
        .copyright {
            background: url('assets/image/footer.png');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: #fff;
            padding: 50px 0;
            text-align: center;
        }
        .copyright h1 {
            font-family: edosz;
        }
        @media screen and (max-width: 768px) {
            .jumbotron h1 {font-size: 45px;}
            .jumbotron {
                width: 100% !important;
                background: url('assets/image/BG_Tablet.png');
                background-size: cover;
                padding: 200px 0 355px 0;
            }
        }
        @media screen and (max-width: 360px) {
            .jumbotron h1 {font-size: 45px;}
            .jumbotron {
                width: 100% !important;
                background-image: url('assets/image/BG_Mobile.png');
                background-size: cover;
                padding: 200px 0 350px 0;
            }
        }
    </style>
</head>

<body>
    <section id="home"></section>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand animated bounceInDown" href="#">
                <img src="assets/image/icon.png">
            </a>
            <button class="navbar-toggler navbar-toggle" type="button" data-toggle="collapse"
                data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto animated bounceInDown">
                    <a class="nav-item nav-link" href="#">Home</a>
                    <a class="nav-item nav-link" href="#statistik">Statistik</a>
                    <a class="nav-item nav-link" href="#tentang">Tentang</a>
                    <a class="nav-item nav-link" href="#gejala">Gejala</a>
                    <a class="nav-item nav-link" href="#video">Video</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End -->
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-2 animated fadeIn font-montserrat-bold delay-250ms">
                        Covid-19
                    </h1>
                    <p class="animated fadeIn delay-500ms">
                        Covid-19 adalah penyakit menular yang disebabkan 
                        oleh SARS-CoV-2, salah satu jenis koronavirus.
                        Penyakit ini mengakibatkan pandemi koronavirus 2019–2020.
                        Penderita COVID-19 dapat mengalami demam, batuk kering, 
                        dan kesulitan bernapas.
                    </p>
                </div>
            </div>
        </div>
    <section id="statistik"></section>
    </div>
    <!-- End -->
    <!-- Statistik -->
    <div class="statistik" style="">
    <div class="container">
    <div style="box-shadow: 5px 5px 30px rgba(0,0,0,0.1);border-radius: 15px;padding: 30px 20px;margin-top: -200px;background: white;">
        <h1 class="text-judul text-pink animated fadeIn delay-750ms" class="font-montserrat-bold">
            Jumlah Kasus Covid-19 Indonesia
        </h1>
        <p class="text-center animated fadeIn delay-750ms">
            Situs ini merupakan sumber informasi inisiatif sukarela warganet Indonesia pro-data, 
            terdiri dari praktisi kesehatan, akademisi & profesional. <br>
            Sumber API Data dari <a target="_blank" href="https://kawalcovid19.harippe.id/api/summary">KawalCovid19</a>
            <br><br>
            <span class="bold text-pink">Pembaruan Terakhir <span id="last_update"></span></span>
        </p>
        <br>
        <div class="row">
            <div class="col-lg-3 col-data data-1 mb-5" style="display: none;">
                <center><img src="assets/image/ungu - terkonfirmasi.png" style="width: 50px;"></center>
                <br>
                <h1 style="color:#7318B4;" class="bold text-center font-montserrat-bold display-4" id="data_confirmed"></h1>
                <p class="text-center bold">Terkonfirmasi</p>
            </div>
            <div class="col-lg-3 col-data data-2 mb-5" style="display: none;">
                <center><img src="assets/image/orange - dirawat.png" style="width: 50px;"></center>
                <br>
                <h1 style="color:#F06300;" class="bold text-center font-montserrat-bold display-4" id="data_activeCare"></h1>
                <p class="text-center bold">Perawatan</p>
            </div>
            <div class="col-lg-3 col-data data-3 mb-5" style="display: none;">
                <center><img src="assets/image/merah - meninggal-1.png" style="width: 50px;"></center>
                <br>
                <h1 style="color:#1BCC3E;" class="bold text-center font-montserrat-bold display-4" id="data_recovered"></h1>
                <p class="text-center bold">Sembuh</p>
            </div>
            <div class="col-lg-3 col-data data-4 mb-5" style="display: none;">
                <center><img src="assets/image/merah - meninggal.png" style="width: 50px;"></center>
                <br>
                <h1 style="color:#C1105B;" class="bold text-center font-montserrat-bold display-4" id="data_deaths"></h1>
                <p class="text-center bold">Meninggal</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    <br><br><br>
    <!-- About Covid 19 -->
    <section id="tentang"></section>
    <div class="container">
    <div class="tentang">
        <h1 class="text-judul text-pink font-montserrat-bold">
            Apa itu Covid-19?
        </h1>
        <br>
        <div class="row">
            <div class="col-lg-5 mb-5 image-tilt" data-tilt>
                <img src="assets/image/01.png" style="width: 100%;">
            </div>
            <div class="col-lg-7 mb-5">
                <h3 class="font-montserrat-bold text-pink">
                    Coronavirus Disease 2019 <br>
                    ( Covid-19)
                </h3>
                <p>
                    adalah penyakit menular yang disebabkan oleh SARS-CoV-2, salah satu jenis koronavirus. Penyakit ini mengakibatkan pandemi koronavirus 2019–2020. Penderita COVID-19 dapat mengalami demam, batuk kering, dan kesulitan bernapas. Sakit tenggorokan, pilek, atau bersin-bersin lebih jarang ditemukan. Pada penderita yang paling rentan, penyakit ini dapat berujung pada pneumonia dan kegagalan multiorgan.
                </p>
                Sumber <a href="https://id.wikipedia.org/wiki/Penyakit_koronavirus_2019" target="_blank">Wikipedia</a>
                <br>
                <br>
                <a href="https://id.wikipedia.org/wiki/Penyakit_koronavirus_2019" class="btn btn-danger btn-pink btn-circle" target="_blank">
                    Lihat Selengkapnya &nbsp;<i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
    <br><br><br>
    <!-- Kenalan lebih dalam -->
    <section id="tentang"></section>
    <div class="container">
    <div class="tentang">
        <h1 class="text-judul text-pink font-montserrat-bold">
            Mari kenalan lebih dalam
        </h1>
        <p class="text-center">
            Sumber <a href="http://www.cnnindonesia.com/gaya-hidup/20200313191641-525-483285/rumus-melawan-virus" target="_blank">CNN Indonesia</a>
        </p>
        <br>
        <div class="row">
            <div class="col-lg-5 mb-5 image-tilt" data-tilt>
                <img src="assets/image/02.png" style="width: 100%;">
            </div>
            <div class="col-lg-7 mb-5">
                <ul class="list-kenal">
                    <a target="_blank" href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengenal-virus-corona.html"><li class="btn-kenal">
                        <img src="assets/image/viruses.png"> &nbsp;&nbsp;
                        Mengenal <span class="arrow"><i class="fa fa-angle-right"></i></span>
                    </li></a>
                    
                    <a target="_blank" href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mencegah-terinfeksi-corona.html"><li class="btn-kenal">
                        <img src="assets/image/washes.png"> &nbsp;&nbsp;
                        Mencegah <span class="arrow"><i class="fa fa-angle-right"></i></span>
                    </li></a>
                    
                    <a target="_blank" href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengobati-corona.html"><li class="btn-kenal">
                        <img src="assets/image/drug.png"> &nbsp;&nbsp;
                        Mengobati <span class="arrow"><i class="fa fa-angle-right"></i></span>
                    </li></a>
                    
                    <a target="_blank" href="https://www.cnnindonesia.com/longform/gaya-hidup/20200313/laporan-mendalam-rumus-melawan-virus/mengantisipasi-corona-di-luar-negeri.html"><li class="btn-kenal">
                        <img src="assets/image/globe.png"> &nbsp;&nbsp;
                        Mengantisipasi <span class="arrow"><i class="fa fa-angle-right"></i></span>
                    </li></a>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <br><br>
    <!-- Gejala -->
    <section id="gejala"></section>
    <div style="background: url('assets/image/BG_2.png');background-size:cover;background-attachment: fixed;background-repeat: no-repeat;padding: 30px 0;color: white;">
    <div class="container">
    <div class="gejala">
        <h1 class="text-judul font-montserrat-bold">
            Gejala Covid-19
        </h1>
        <p class="text-center">
            Gejala yang dirasakan oleh penderita virus covid19
        </p>
        <div class="row">
            <div class="col-lg-4">
            <div class="col-gejala">
                <center>
                    <img src="assets/image/gejala/1.jpg" style="border-radius: 50%;width: 150px;">
                </center>
                <br><h3>Sakit Tenggorokan</h3>
            </div>
            </div>    
            <div class="col-lg-4">
            <div class="col-gejala">
                <center>
                    <img src="assets/image/gejala/2.jpg" style="border-radius: 50%;width: 150px;">
                </center>
                <br><h3>Sakit Kepala</h3>
            </div>
            </div>    
            <div class="col-lg-4">
            <div class="col-gejala">
                <center>
                    <img src="assets/image/gejala/3.jpg" style="border-radius: 50%;width: 150px;">
                </center>
                <br><h3>Demam panas</h3>
            </div>
            </div>    
            <div class="col-lg-4">
            <div class="col-gejala">
                <center>
                    <img src="assets/image/gejala/4.jpg" style="border-radius: 50%;width: 150px;">
                </center>
                <br><h3>Batuk & Bersin</h3>
            </div>
            </div>    
            <div class="col-lg-4">
            <div class="col-gejala">
                <center>
                    <img src="assets/image/gejala/5.jpg" style="border-radius: 50%;width: 150px;">
                </center>
                <br><h3>Sesak Nafas</h3>
            </div>
            </div>    
            <div class="col-lg-4">
            <div class="col-gejala">
                <center>
                    <img src="assets/image/gejala/6.jpg" style="border-radius: 50%;width: 150px;">
                </center>
                <br><h3>Kebingungan</h3>
            </div>
            </div>    
            
        </div>

    </div>
    </div>
    </div>
    <br><br><br>
    <!-- Video Cara Kerja Corona -->
    <section id="video"></section>
    <div class="container">
    <div class="video">
        <h1 class="text-judul font-montserrat-bold text-pink">
            Gejala Virus Corona dan Cara Pencegahannya
        </h1>
        <p class="text-center">
            Sumber dari Channel YouTube <a href="https://www.youtube.com/channel/UC5BMIWZe9isJXLZZWPWvBlg" target="_blank">Kompas TV</a>
        </p>
        <iframe src="https://www.youtube.com/embed/5h-OXcjc4TY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius:15px;width:100%;height:500px;"></iframe>
    </div>
    </div>

    <br><br><br>
    <!-- Footer -->
    <div class="copyright">
        <div class="container">
            <h1 class="display-4">
                CORONAVIRUS
            </h1>
            <h5 class="bold">Stay Safe At Home</h5>
        </div>
    </div>
    <!-- End Footer -->
    <!-- Scroll To Top -->
    <a href="#top" class="scrollToTop">
        <i class="fa fa-angle-up iconScrollToTop"></i>
    </a>
    <!-- Load Js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- <script src="assets/js/slim.min.js"></script> -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script>
        // Function on scroll
        $(document).scroll(function () {
            // ambil ukuran scroll halaman
            var scroll = $(window).scrollTop();
            console.log(scroll);
            // $('.scrollToTop').css('transform','rotate('+scroll+'deg)');
            if (scroll >= 100) {
                $('.scrollToTop').css('display', 'block');
                $('.navbar').removeClass(' navbar-dark');
                $('.navbar').addClass(' navbar-light');
                $('.navbar').css('background', '#06263e');
                $('.navbar').css('transition-duration', '500ms');
                $('.navbar').css('box-shadow', '1px 0 7px rgba(0,0,0,0.4)');
                $('.navbar-toggle').css('background', '#eee');
                $('.navbar-brand').css('color', '#fff');
                $('.nav-link').css('color', '#fff');
                $('.title-logo').css('width', '60px');
            } else {
                $('.scrollToTop').css('display', 'none');
                // $('.navbar').removeClass(' fixed-top');
                $('.navbar').css('box-shadow', 'none');
                $('.navbar').addClass(' navbar-dark');
                $('.navbar').removeClass(' navbar-light');
                $('.navbar').css('background', 'none');
                $('.navbar').css('transition-duration', '500ms');
                $('.navbar-toggle').css('background', '#fff');
                $('.navbar-brand').css('color', '#fff');
                $('.nav-link').css('color', '#fff');
                $('.title-logo').css('width', '80px');
            }
            if (scroll >= 200) {
                $('.col-data').css('display','block');
                $('.data-1').addClass('animated fadeIn delay-250ms');
                $('.data-2').addClass('animated fadeIn delay-500ms');
                $('.data-3').addClass('animated fadeIn delay-750ms');
                $('.data-4').addClass('animated fadeIn delay-1s');
            }
        });
        // Data Tilt Image
        $('.image-tilt').tilt({
            perspective:2000
        });
        // API covid19
        $.getJSON("https://kawalcovid19.harippe.id/api/summary", 
            function(data){
                $('#last_update').append(data.metadata.lastUpdatedAt);
                $('#data_confirmed').append(data.confirmed.value);
                $('#data_recovered').append(data.recovered.value);
                $('#data_deaths').append(data.deaths.value);
                $('#data_activeCare').append(data.activeCare.value);
        });
    </script>
</body>
</html>