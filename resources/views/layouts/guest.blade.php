<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>African Young Minds</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <!-- animate CSS -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/lt-themify-icons@1.1.0/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.2/css/swiper.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="{{ asset('owl-carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl-carousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- SweetAlert2 Library -->
    <!-- SweetAlert CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <style>
        .swiper {
            margin-top: 3rem;
            margin-bottom: 3rem;
            border: 1px solid #ccc;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            position: relative;
        }

        .ayb-slider {
            width: 124rem;
            position: relative;
        }

        .ayb-slider .swiper-slide .main {
            padding: 0;
            border-radius: 2rem;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 90%;
            border: 1px solid #ccc;
        }

        .ayb-slider .ayb-slider-img {
            width: 100%;
            height: calc(100% - 100px);
            background-color: #6da8e5;
        }

        .ayb-slider .main .ayb-slider-img img {
            height: 100%;
            object-fit: cover;
        }

        .ayb-slider .ayb-slider-content {
            postion: absolute !important;
            bottom: 0 !important;
            left: 0;
            top: 0;
            width: 100%;
            background-color: rgb(252, 252, 253);
            text-align: center;

        }

        .swiper-slide-shadow-left,
        .swiper-slide-shadow-right {
            display: none;
        }

        .main_menu .main-menu-item ul li a {
            color: #ffffff !important;
        }

        .slider-thumbnails {
            height: 190px;
            width: 25%;
        }

        .menu_fixed {
            background-color: #67a4e4f5;
            color: #f1f1f1;
        }

        .menu_fixed span {
            color: #f9f9f9 !important;
        }

        .cta_part_text p {
            color: #6da8e5 !important;
            text-transform: uppercase;
            margin-bottom: 10px;
            font-weight: 500;
            font-size: 36px;
        }

        p,
        h5,
        h3 a:hover {
            color: #6da8e5 !important;
        }

        .btn_1 {
            background-color: #6da8e5 !important;
        }

        .nav-link {
            color: #ff1481 !important;
        }

        .main_menu .main-menu-item ul li a {
            color: #ffffff !important;
        }

        .team_member_section {
            background-color: #6ea3e8;
        }

        .team_member_section .single_team_member {
            border: 1px solid #45556a;
            padding: 20px;
            text-align: center;
            height: 469px;
            background-color: #162a44;
        }

        hr {
            margin-top: -1rem;
        }

        .single_team_member img {
            width: 200px !important;
            height: 225px !important;
        }

        .team_member_section .single_team_member .single_team_text p {
            color: #394048;
            font-size: 14px;
            margin-bottom: 26px;
            margin-top: 11px;
        }

        .team_member_section .single_team_member .single_team_text .team_member_social_icon a {
            color: #f6f7f9 !important;
        }

        .team_member_section .single_team_member .single_team_text .team_member_social_icon a {
            color: #2d2e2f;
            margin: 0px 23px;
            text-transform: capitalize;
            position: relative;
            z-index: 1;
        }

        .thumbnail {
            position: relative;
            overflow: hidden;
            margin-bottom: 5px;
        }

        .caption {
            position: absolute;
            top: -100%;
            right: 0;
            background: rgba(66, 139, 202, 0.75);
            width: 100%;
            height: 100%;
            padding: 10%;
            text-align: center;
            color: #f9f9f9 !important;
            z-index: 2;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        .caption p {
            color: #f9f9f9 !important;

        }

        .thumbnail:hover .caption {
            top: 0%;
        }

        p {
            color: #21446e !important;
        }
    </style>
    <script src="//kit.fontawesome.com/3ed76124d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="font-size: 25px;font-weight: bold;color: #ff1481;" class="navbar-brand" href="/">
                            <img src="{{ asset('img/logo.png')}}" width="35" height="30">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/" style="font-size:13px">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about" style="font-size:13px">About</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/team" style="font-size:13px">Team</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:13px">
                                        Academy Training Registration
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/DataAcademyAfrica">Data Science Training</a>
                                        <!-- <a class="dropdown-item" href="/DataAcademyAfrica ">Data Academy Training</a> -->
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:13px">
                                        Events
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/event">Event</a>
                                        <a class="dropdown-item" href="/award">Award</a>
                                        <a class="dropdown-item" href="/gallery">Gallery</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/sponsor" style="font-size:13px">Partners</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/meetups" style="font-size:13px">Meet Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact" style="font-size:13px">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    @yield('content')


    <!-- about part start-->


    <!-- upcoming_event part start-->


    <!-- cta part end-->
    <!-- footer part start-->
    <footer class="footer footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-8 col-md-8 col-xl-4">
                    <!-- <div class="single-footer-widget col-4">thess</div> -->
                    <div class="single-footer-widget footer_1">
                        <div class="d-flex justify-content-between">
                            <img src="{{ asset('img/logo1.png') }}" width="65" height="60">
                            <a style="font-size: 25px; font-weight: bold;color: #ff1481;" class="navbar-brand" href="{{ route('welcome') }}"> <span><span style="color: #05070a;">African</span><span style="color: #ece6e4;"> Young Brains</span></span> </a>
                        </div>
                        <p>African Young Brains (AYB) is a registered organisation with focus and commitment to searching for, showcasing and unveiling brilliant young professionals of African descent.</p>
                        <a class="p-1" style="color:#f1f1f1" href="{{ route('member.create') }}">Become a member</a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Follow Us</h4>
                        <div class="social_icon">
                            <a class="d-block p-1" href="https://www.facebook.com/groups/483055818920169/?ref=share" target="_blank"> <i class="ti-facebook"></i> African Young Brains_fb</a>
                            <a class="d-block p-1" href="https://www.linkedin.com/groups/9094484" target="_blank"> <i class="ti-linkedin"></i> African Young Brains_linkedin</a>
                            <a class="d-block p-1" href="https://x.com/aybrains" target="_blank"> <i class="ti-twitter-alt"></i> African Young Brains_tw</a>
                            <a class="d-block p-1" href="https://www.instagram.com/african_youngbrains/" target="_blank"> <i class="ti-instagram"></i> African Young Brains_ig</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-xl-3">
                    <div class="single-footer-widget footer_3">
                        <h4>THINK. CREATE.</h4>
                        <div class="footer_img">
                            <div class="single_footer_img">
                                <img src="{{ asset('img/footer_img/footer_img_1.png') }}" alt="">
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('img/footer_img/footer_img_2.png') }}" alt="">
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('img/footer_img/footer_img_3.png') }}" alt="">
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('img/footer_img/footer_img_4.png') }}" alt="">
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('img/footer_img/footer_img_5.png') }}" alt="">
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('img/footer_img/footer_img_6.png') }}" alt="">
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                                    Copyright ©<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Designed by
                                    <a href="https://www.africanyoungbrains.com/">AYB</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="//code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    {{-- <script src="https://unpkg.com/swiper/js/swiper.min.js"></script> --}}
    {{-- <script src="{{ asset('js/swiper/swiper-bundle.min.js') }}"></script> --}}
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.2/js/swiper.esm.browser.bundle.min.js"></script> --}}
    <!-- swiper js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <!-- swiper js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('owl-carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            autoplay: {
                delay: 5000,
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            slidesPerView: '3',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5
            },
        });
    </script>

    @stack('scripts')


</body>

</html>