<style type="text/css">
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .a {
        text-decoration: none;
    }

    .a:hover {
        text-decoration: underline;
    }

    .google-maps {
        position: relative;
        padding-bottom: 35%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }

    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }


    .zoomeffect {
        width: 100%;
        height: 100%;
        text-align: center;
        overflow: hidden;
        position: relative;
        cursor: default;
    }

    .zoomeffect img {
        display: block;
        position: relative;
        cursor: pointer;
        -webkit-transition: all .4s linear;
        transition: all .4s linear;
        width: 100%;
    }

    .zoomeffect:hover img {
        -ms-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }
</style>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin/plugins/animatecss/animate.css">
    <link rel="stylesheet" href="admin/plugins/animatecss/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="admin/plugins/aos-master/dist/aos.css" rel="stylesheet">
    <title>SMK MULTI KARYA</title>
</head>

<body>
    <!-- NAVIGASI -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top  shadow-lg"
        style="background:linear-gradient(to right,#FFD700,#55FF33);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logoc.png" width="200" alt="coba" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login"><button
                                class="btn btn-primary m-3">Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/register"><button
                                class="btn btn-primary m-3">Register</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid pt-2">
        <div class="container">
            <div class="row">
                <p>s</p>
            </div>
        </div>
    </div>

    <!-- SLIDER -->
    <div id="carouselExampleIndicators" class="carousel slide pt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="https://smkmultikarya.sch.id">
                    <img src="images/slider2.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-1"><b>SMK Multi Karya</b></h5>
                    <p>SMK Teknik dan Bisnis Manajemen</p>
                    <button type="button" class="btn btn-warning btn-m" data-bs-toggle="modal"
                        data-bs-target="#exampleModa2">Daftar Sekarang</button>
                </div>
            </div>
            <div class="carousel-item">
                <a href="https://kedeesemka.com">
                    <img src="images/slider3.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-1"><b>Belanja Kebutuhanmu</b></h5>
                    <p>Belanja Mudah dan Aman ya Kedeesemka</p>
                    <a href="https://kedeesemka.com" type="button" class="btn btn-warning btn-m">Kunjungi
                        Marketplace</a>
                </div>
            </div>

            <div class="carousel-item">
                <a href="https://e-learning.smkmultikarya.com">
                    <img src="images/slider4.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-1"><b>Belajar Online</b></h5>
                    <p>Belajar Mudah & Up To Date</p>
                    <a href="https://e-Learning.smkmultikarya.com" type="button" class="btn btn-warning btn-m">Akses
                        Sekarang</a>
                </div>
            </div>

            <div class="carousel-item">
                <a href="https://facebook.com">
                    <img src="images/popup.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-1"><b>Update Learning</b></h5>
                    <p>Up To Date Technology</p>
                    <a href="https://e-Learning.smkmultikarya.com" type="button" class="btn btn-warning btn-m">Akses
                        Sekarang</a>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- ENDING SLIDER -->


    <!-- <div class="container-fluid kenapa"> -->
    <div class="container">

    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </div>
    </div>
    <!-- END GALERI AKTIVITAS -->
    <!-- MEDSOS UPDATE -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <!-- style="background:linear-gradient(to right,#FFC93C,#B9F3FC); -->
       <div class="container-fluid text-center">
       <div class="row">
       <h1 data-aos="fade-up"><b>MEDIA SOSIAL KAMI</b></h1>
       <P data-aos="fade-up" class="pb-4">Kunjungi Media Sosial Kami Untuk Terus Mendapatkan Informasi yang Up To Date</P>
       <div class="col-md-3"></div>
           <div data-aos="flip-right" class="col-md-1 mb-2">
           <a href="https://youtube.com/@riusz7">
               <span class="lingkaran" ><i class="fab fa-youtube fa-2x" style="color: #ff0000;"></i></span>
               </a>
               <h2 style=" font-size: 20px; "><b>Youtube</b></h2>

           </div>
           <div data-aos="flip-right" class="col-md-1 mb-2">
           <a href="https://www.instagram.com/chim_xyz">
               <span class="lingkaran" ><i class="fab fa-instagram-square fa-2x" style="color: #cc33ff;"></i></span>
           </a>
               <h2 style=" font-size: 20px;"><b>Instagram</b></h2>
           </div>
           <div data-aos="flip-right" class="col-md-1 mb-2">
           <a href="https://www.facebook.com/SmkMultiKaryaMedan/">
               <span class="lingkaran" ><i class="fab fa-facebook fa-2x" style="color: #d4ff00;"></i></span>
           </a>
               <h2 style=" font-size: 20px;"><b>facebook</b></h2>
           </div>
           <div data-aos="flip-right" class="col-md-1 mb-2">
           <a href="https://twitter.com/smkmultikaryaid">
               <span class="lingkaran" ><i class="fab fa-twitter fa-2x" style="color: #3344ff;"></i></span>
           </a>
               <h2  style=" font-size: 20px;"><b>Twitter</b></h2>
           </div>
           <div data-aos="flip-right" class="col-md-1 mb-2">
           <a href="tiktok.com/@cst_0o1o10o101o0101o1o0o">
               <span class="lingkaran" ><i class="fab fa-tiktok fa-2x" style="color: #000000;"></i></span>
           </a>
               <h2  style=" font-size: 20px;"><b>Tik Tok</b></h2>
           </div>
           <div data-aos="flip-right" class="col-md-1 mb-2">
           <a href="https://wa.me/082277788773">
               <span class="lingkaran" ><i class="fab fa-whatsapp-square fa-2x" style="color: #55FF33;"></i></span>
           </a>
               <h2  style=" font-size: 20px;"><b>WhatsApp</b></h2>
           </div>


           <div class="col-md-3"></div>
           </div>
        </div>
        </div>
   <div class="container-fluid bg-light">
     <div class="container">
       <div class="row">
       <div class="col-md-4"></div>
         <div class="col-md-4 ">

       </div>
       <div class="col-md-4"></div>
     </div>
     </div>
   </div>
    <!-- GOOGLE MAPS -->
        <div class="container-fluid pt-5 pb-3 bg-light">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-md-6 pt-5">
     <img src="file/berita/siswa3.png" class="img-fluid pt-5" widht="450px">
     </div> -->
                    <div class="col-md-12 embed-responsive embed-responsive-16by9 google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.153887980928!2d98.68932921418913!3d3.5519808515360625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031307742441733%3A0xaa0c901b8f3597cb!2sSMK%20Multi%20Karya!5e0!3m2!1sid!2sid!4v1675247517315!5m2!1sid!2sid"
                            width="1200" height="450" style="border:0;" allowfullscreen="true" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- END GOOGLE MAPS -->
        <!-- FOOTER -->

        <div class="container-fluid">
            <div class="row">
                <div style="background:linear-gradient(to right,#FFD700,#55FF33);">
                    <div class="row">
                        <div class="footer-bottom">
                            <div class="container-fluid text-center text-white">
                                <p>Copyright &copy; 2023 SMK Multi Karya by <b><a
                                            style="color: #FFFFFF; text-decoration:none" href="">Mickhel</a><b>
                                </p>
                            </div>
                        </div>
                        <!-- END FOOTER -->

                        <!--Start of Tawk.to Script-->
                        <script type="text/javascript">
                            var Tawk_API = Tawk_API || {},
                                Tawk_LoadStart = new Date();
                            (function() {
                                var s1 = document.createElement("script"),
                                    s0 = document.getElementsByTagName("script")[0];
                                s1.async = true;
                                s1.src = 'https://embed.tawk.to/635aaf03daff0e1306d453d5/1ggd3n9vt';
                                s1.charset = 'UTF-8';
                                s1.setAttribute('crossorigin', '*');
                                s0.parentNode.insertBefore(s1, s0);
                            })();
                        </script>
                        <!--End of Tawk.to Script-->
                        <!-- jQuery -->


                        <script src="admin/plugins/jquery/jquery.min.js"></script>
                        <script src="admin/plugins/jquery/jquery.js"></script>
                        <!-- jQuery UI 1.11.4 -->
                        <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
                        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                        <script>
                            $.widget.bridge('uibutton', $.ui.button)
                        </script>
                        <!-- Bootstrap 4 -->
                        <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="admin/plugins/bootstrap/js/bootstrap.min.js"></script>
                        <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
                        </script>

                        <script src="admin/plugins/aos-master/dist/aos.js"></script>
                        <script>
                            AOS.init();
                        </script>

                        <script>
                            $('#myModal').modal('show');
                        </script>

</body>

</html>
