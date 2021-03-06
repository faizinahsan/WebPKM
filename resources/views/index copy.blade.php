<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebPKM Unpad</title>
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="css/homepage/card.css">
    <link rel="stylesheet" href="css/homepage/timeline_copy.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar/navbar_homepage.css">
    <script src="https://kit.fontawesome.com/3d79b0331b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header-ok">

        <!-- Start Navcontainer -->
        <div class="nav-container">
            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="nav-brand" href="index.html">PKM UNPAD</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="alur.html" class="nav-link">Alur</a>
                        </li>
                        <li class="nav-item">
                            <a href="table.html" class="nav-link">Reviewer</a>
                        </li>
                        <li class="nav-item">
                            <a href="berkas.html" class="nav-link">Berkas</a>
                        </li>
                        <li class="nav-item">
                            <a class="auth-nav nav-link btn-auth" href="login.html">Sign In</a>
                        </li>
                        <li class="nav-item signup-nav">
                            <a class="auth-nav nav-link btn-auth" href="signup.html">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Start Image Slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol> -->
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(img/backgroundhome.png);">
                        <div class="carousel-caption text-center">
                            <h1>Program Kreatifitas Mahasiswa</h1>
                            <h2>Universitas Padjadjaran</h2>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item"
                        style="background:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(img/backgroundhome2.png);">
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item"
                        style="background:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(img/backgroundhome3.png);">
                    </div>
                </div>
                <!-- End Carousel Inner -->
                <!-- Prev & Next Buttons -->
                <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                    <i class="fas fa-caret-square-left fa-2x" style="color: black;"></i>
                </a>
                <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                    <i class="fas fa-caret-square-right fa-2x" style="color: black;"></i>
                </a>
            </div>
        </div>
        <!-- End Image Slider -->
    </div>

    </div>
    <!-- End Navcontainer -->
    </div>
    <!-- Start Container Section -->
    <div class="container">
        <!-- Start Introduction Section -->
        <div class="introduction">
            <div class="row">
                <div class="col-md-7">
                    <h1>Apa itu PKM?</h1>
                    <p>Program Kreativitas Mahasiswa adalah kegiatan di bawah Kementerian Riset, Teknologi, dan
                        Pendidikan Tinggi untuk meningkatkan kreativitas dan inovasi berlandaskan penguasaan sains dan
                        teknologi. Program ini berupa pemberian dana bagi proposal-proposal yang dinilai layak oleh tim
                        juri untuk dilaksanakan. Di akhir program, karya terpilih akan diikutsertakan ke Pekan Ilmiah
                        Mahasiswa Nasional (PIMNAS) yang menjadi salah satu penentu pemeringkatan perguruan tinggi
                        negeri. </p>
                    <a href="#" class="btn btn-primary btn-upload-proposal">Upload Proposal</a>
                </div>
                <div class="col-md-5">
                    <img class="upload-proposal-img" src="img/homeicon.png" alt="icon">
                </div>
            </div>
        </div>
        <!-- End Introduction Section -->
    </div>
    <!-- End Container Section -->
    <!-- Start Article Section -->
    <div class="article">
        <h1 class="text-center">Seputar PKM UNPAD</h1>
        <div class="">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <div class="container">
                    <div class="carousel-inner carousel-inner-two row mx-auto ">
                        <div class="carousel-item carousel-item-two col-md-3 active" style="max-height: 500px;">
                            <div class="card" style="max-width: 261px; max-height: 500px;">
                                <img class="card-img-top" src="img/cardimgcontainer.png" alt="Card image cap"
                                    style="max-width: 261px; max-height: 185px;">
                                <div class="card-body">
                                    <h5 class="card-title">PKM Unpad Lolos Pimnas</h5>
                                    <p class="card-text" style="max-height: 154px;">Empat kelompok Program Kreativitas
                                        Mahasiswa (PKM) Universitas
                                        Padjadjaran dinyatakan lolos sebagai peserta Pekan Ilmiah Mahasiswa Nasional
                                        (Pimnas)
                                        ke-32 </p>
                                    <div class="text-center pt-md-2">
                                        <a class="btn btn-primary btn-custom-readmore" href="news.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item-two col-md-3" style="max-height: 500px;">
                            <div class="card" style="max-width: 261px; max-height: 500px;">
                                <img class="card-img-top" src="img/cardimgcontainer.png" alt="Card image cap"
                                    style="max-width: 261px; max-height: 185px;">
                                <div class="card-body">
                                    <h5 class="card-title">Tim Plesetan Siap Pimnas</h5>
                                    <p class="card-text" style="max-height: 154px;">Empat kelompok Program Kreativitas
                                        Mahasiswa (PKM) Universitas
                                        Padjadjaran dinyatakan lolos sebagai peserta Pekan Ilmiah Mahasiswa Nasional
                                        (Pimnas)
                                        ke-32 </p>
                                    <div class="text-center pt-md-2">
                                        <a class="btn btn-primary btn-custom-readmore" href="news.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item-two col-md-3" style="max-height: 500px;">
                            <div class="card" style="max-width: 261px; max-height: 500px;">
                                <img class="card-img-top" src="img/cardimgcontainer.png" alt="Card image cap"
                                    style="max-width: 261px; max-height: 185px;">
                                <div class="card-body">
                                    <h5 class="card-title">PKM Unpad Lolos Pimnas</h5>
                                    <p class="card-text" style="max-height: 154px;">Empat kelompok Program Kreativitas
                                        Mahasiswa (PKM) Universitas
                                        Padjadjaran dinyatakan lolos sebagai peserta Pekan Ilmiah Mahasiswa Nasional
                                        (Pimnas)
                                        ke-32 </p>
                                    <div class="text-center pt-md-2">
                                        <a class="btn btn-primary btn-custom-readmore" href="news.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item-two col-md-3" style="max-height: 500px;">
                            <div class="card" style="max-width: 261px; max-height: 500px;">
                                <img class="card-img-top" src="img/cardimgcontainer.png" alt="Card image cap"
                                    style="max-width: 261px; max-height: 185px;">
                                <div class="card-body">
                                    <h5 class="card-title">Kompor Lansia Unpad</h5>
                                    <p class="card-text" style="max-height: 154px;">Empat kelompok Program Kreativitas
                                        Mahasiswa (PKM) Universitas
                                        Padjadjaran dinyatakan lolos sebagai peserta Pekan Ilmiah Mahasiswa Nasional
                                        (Pimnas)
                                        ke-32 </p>
                                    <div class="text-center pt-md-2">
                                        <a class="btn btn-primary btn-custom-readmore" href="news.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Controls-->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class="far fa-arrow-alt-circle-left fa-3x" style="color: black;"></i>

                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class="far fa-arrow-alt-circle-right fa-3x" style="color: black;"></i>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->

            </div>
        </div>
    </div>
    <!-- End Article Section -->

    <!-- Start Timeline Section-->
    <div class="container">
        <div class="wrap">
            <div class="timeline">
                <div class="year">
                    <div class="evt">

                        <div class="in">
                            <span class="date fas fa-clock" style="font-size: 60px; border: 0px; color: #f9ca48;"></span>
                            <!-- <span class="date">
                            </span> -->
                        </div>
                    </div>

                    <div class="evt">

                        <div class="in">
                            <span class="date">
                                <span class="day">11</span>
                                <span class="month">Mar</span>
                            </span>
                            <h2>Upload Proposal Liga</h2>
                            <p class="data">Pengumpulan Proposal Liga PKM UNPAD dari tanggal 11 Maret - 6 April 2020</p>
                        </div>
                    </div>

                    <div class="evt">
                        <div class="in">
                            <span class="date">
                                <span class="day">8</span>
                                <span class="month">Apr</span>
                            </span>
                            <h2>Upload Proposal Non Liga</h2>
                            <p class="data">Pengumpulan Proposal Non Liga PKM UNPAD dari tanggal 8 April - 20 April 2020
                            </p>
                        </div>
                    </div>

                </div>
                <div class="evt">
                    <div class="in">
                        <span class="date">
                            <span class="day">22</span>
                            <span class="month">Apr</span>
                        </span>
                        <h2>Evaluasi / Penilaian Proposal</h2>
                        <p class="data">Proposal yang sudah diupload akan dilakukan evaluasi dan penilaian terlebih
                            dahulu dari tanggal 22 April - 30 April 2020</p>
                    </div>
                </div>
                <div class="evt">
                    <div class="in">
                        <span class="date">
                            <span class="day">4</span>
                            <span class="month">Mei</span>
                        </span>
                        <h2>Pengumuman Pemenang Liga</h2>
                        <p class="data">Pengumuman 10 proposal terbaik Liga PKM UNPAD pada tanggal 4 Mei 2020</p>
                    </div>
                </div>

                <div class="evt">
                    <div class="in">
                        <span class="date">
                            <span class="day">22</span>
                            <span class="month">Jun</span>
                        </span>
                        <h2>Coaching Dengan Reviewer</h2>
                        <p class="data">Tahap ini dilakukan dengan diskusi dan beretemu dosen reviewer untuk merevisi proposal, tahap coaching dilakukan dari tanggal 22 Juni - 24 Agustus 2020</p>
                    </div>
                </div>

                <div class="evt">
                    <div class="in">
                        <span class="date">
                            <span class="day">3</span>
                            <span class="month">Sept</span>
                        </span>
                        <h2>Upload Propsal Final</h2>
                        <p class="data">Pengumpulan proposal PKM Final agar diseleksi kembali oleh reviewer untuk dapat username dan password simbelmawa pada tanggal 3 September - 17 September 2020</p>
                    </div>
                </div>

                <div class="evt">
                    <div class="in">
                        <span class="date">
                            <span class="day">2</span>
                            <span class="month">Nov</span>
                        </span>
                        <h2>Akun Simbelmawa</h2>
                        <p class="data">Proposal yang sudah layak akan diberi akun pada tanggal 2 November 2020</p>
                    </div>
                </div>

                <div class="evt">
                    <div class="in">
                        <span class="date">
                            <span class="day">13</span>
                            <span class="month">Nov</span>
                        </span>
                        <h2>Upload Simbelmawa</h2>
                        <p class="data">Upload Proposal ke akun Simbelmawa dari tanggal 13 November - 2 Desember 2020</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End  Timeline Section-->
    <div class="footer">
        <h1>PKM UNPAD</h1>
        <h3>Dibuat Oleh</h3>
        <div class="row nama-developer">
            <div class="col-md-2">
                <h4>Intan Pratiwi</h4>
            </div>
            <div class="col-md-3">
                <h4>Mochamad Fa'izin Ahsan</h4>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myCarousel").on("slide.bs.carousel", function (e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 4;
                var totalItems = $(".carousel-item-two").length;
                console.log("total items: " + totalItems)

                if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i = 0; i < it; i++) {
                        // append slides to end
                        if (e.direction == "left") {
                            $(".carousel-item-two")
                                .eq(i)
                                .appendTo(".carousel-inner-two");
                        } else {
                            $(".carousel-item-two")
                                .eq(0)
                                .appendTo($(this).find(".carousel-inner-two"));
                        }
                    }
                }
            });
        });
    </script>

</body>

</html>