<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>@yield('title', 'Ken Relocation')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.jpg') }}">

    <meta name="keywords" content="Transportation, Crating, Packing, Wrapping, Pallet, Strapping, Dangerous Goods Handling, Hazardous Materials, Air Freight Import and Export Services, Air Freight, Import and Export, best Import, Export, Oversized Freight Services for International Shipments, Oversized Freight, International Shipments, International Ocean Freight Import and Export, Local Home Relocation, Home Relocation, Warehousing, Ken Relocation Lagos, Relocation, Relocation companies in Nigeria, Warehousing in lagos, Import and Export company in Lagos" />

    <meta name="google-site-verification" content="xJ6PLAu1QAV_uTfBTrDK0K8NjqGgvnq-ZCjNoVj-_Q4" />
</head>

<body>
    <!-- Start Navbar -->
    <div class="navbar-area sticky-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="{{ asset('assets/img/kennnlog.jpg') }}" style="height: 45px;" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav two three">
            <div class="container-fluid ">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/kennnlog.jpg') }}" style="height: 50px;" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="/services" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <ul>
                                <li>
                                    <div class="call">
                                        <i class='bx bxs-phone-call'></i>
                                        <span>Call Now</span>
                                        <a href="tel:+2348153512680">+2348153512680</a>
                                    </div>
                                </li>
                                <li>
                                    <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#myModalRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- Sidebar Modal -->
    <div id="myModalRight" class="modal fade modal-right" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{ asset('assets/img/kennnlog.jpg') }}" style="height: 70px;" alt="Logo">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-area">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <i class='flaticon-placeholder'></i>
                                <span>14, Adegbola Street, Airport - Ikeja‎ Lagos.</span>
                                <br>
                                <span> Plot 1, Onne Refinery Road, Port Harcourt.</span>
                                <br>
                                <span>NAHCO Cargo Warehouse, NA, IA Airport - Abuja</span>
                            </li>
                            <li>
                                <i class='flaticon-email'></i>
                                <span>Mail: <a href="mailto:info@kenrelocationcomltd.com">info@kenrelocationcomltd.com</a></span>
                                <span>Gmail: <a href="mailto:kenrelocation@gmail.com">kenrelocation@gmail.com</a></span>
                            </li>
                            <li>
                                <i class='flaticon-call'></i>
                                <span>Phone: <a href="tel:+2348153512680">+2348153512680</a></span>
                            </li>
                        </ul>
                    </div>

                    <div class="social-area">
                        <h2>Follow Us</h2>
                        <ul>
                            <li>
                                <a href="https://web.facebook.com/kenrelocationcompanylimitednigeria/?_rdc=1&_rdr" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/KenNigeria" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/Kenrelocationfreight/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    @yield('content')

    <!-- Footer -->
    <footer class="pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <h3>About Us</h3>
                            <p>Ken Relocation Company Limited is a full line of national, international and continental logistics provider and freight forwarding company.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-service">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <h3>Find Us</h3>
                            <ul>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    <span>14, Adegbola Street, Airport - Ikeja‎ Lagos.</span>
                                    <br>
                                    <span> Plot 1, Onne Refinery Road, Port Harcourt.</span>
                                    <br>
                                    <span>NAHCO Cargo Warehouse, NA, IA Airport - Abuja</span>
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <a href="mailto:info@kenrelocationcomltd.com">info@kenrelocationcomltd.com</a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:+2348153512680">+2348153512680</a>
                                </li>
                                <li>
                                    <i class="fa fa-whatsapp"></i><span style="color: white;">+2348153512680</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Copyright -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <p>© Copyright {{ date('Y') }}, Design & Developed by <a href="https://e3tech.com.ng" target="_blank">E3 Technologies</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->

    <!-- Essential JS -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Form Validator JS -->
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <!-- Ajax chip JS -->
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Popup JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Odometer JS -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Progressbar JS -->
    <script src="{{ asset('assets/js/progressbar.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Floating WhatsApp Button -->
    <style>
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 35px;
            box-shadow: 2px 2px 3px #999;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .whatsapp-float:hover {
            background-color: #128C7E;
            color: #FFF;
            transform: scale(1.1);
        }

        /* Mobile specific adjustments */
        @media screen and (max-width: 767px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 85px; /* Moves it above the red back-to-top button */
                right: 20px;
                font-size: 28px;
            }
        }
    </style>
    <a href="https://wa.me/2348153512680" class="whatsapp-float" target="_blank" rel="noopener noreferrer" title="Chat with us on WhatsApp">
        <i class="fa fa-whatsapp"></i>
    </a>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')
</body>

</html>
