@extends('layouts.app')

@section('title', 'Our Services - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>/</span></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <br><br><br>

    <!-- Services -->
    <section class="service-area ptb-100">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/transportation-haulage">
                                <img src="https://www.clipartmax.com/png/full/290-2909438_air-transportation-multimodal-transport-logistics-cargo-shipping-services.png" alt="Service" width="362" height="400">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/transportation-haulage">Transportation / Haulage <br> Services</a></h3>
                            <a class="service-link" href="/services/transportation-haulage"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/warehousing">
                                <img src="{{ asset('assets/img/iStock-1125121546-1024x683-489772722.jpg') }}" alt="Service" width="362" height="425">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/warehousing">Warehousing</a></h3>
                            <a class="service-link" href="/services/warehousing"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/packing">
                                <img src="{{ asset('assets/img/services/creat.jpg') }}" alt="Service" width="362" height="425">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/packing">Packing, Wrapping and <br>Pallet Strapping </a></h3>
                            <a class="service-link" href="/services/packing"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/hazardous-materials">
                                <img src="{{ asset('assets/img/services/danger.jpg') }}" alt="Service" width="362" height="420">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/hazardous-materials">Hazardous Materials & <br> Dangerous Goods Handling</a></h3>
                            <a class="service-link" href="/services/hazardous-materials"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/air-freight">
                                <img src="{{ asset('assets/img/services/air.jpg') }}" alt="Service" width="362" height="420">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/air-freight">Air Freight Import and Export Services</a></h3>
                            <a class="service-link" href="/services/air-freight"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/oversized-freight">
                                <img src="{{ asset('assets/img/services/size.jpg') }}" alt="Service" width="362" height="425">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/oversized-freight">Oversized Freight Services <br>for International Shipments </a></h3>
                            <a class="service-link" href="/services/oversized-freight"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/international-ocean">
                                <img src="{{ asset('assets/img/services/ocean.jpg') }}" alt="Service" width="362" height="425">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/international-ocean">International Ocean Freight<br> Import and Export</a></h3>
                            <a class="service-link" href="/services/international-ocean"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/home-location">
                                <img src="{{ asset('assets/img/services/move.jpg') }}" alt="Service" width="362" height="425">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/home-location">Local Home Relocation</a></h3>
                            <a class="service-link" href="/services/home-location"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-top">
                            <a href="/services/crating">
                                <img src="{{ asset('assets/img/services/crat.jpg') }}" alt="Service" width="362" height="425">
                            </a>
                        </div>
                        <div class="service-bottom">
                            <h3><a href="/services/crating">Crating Services</a></h3>
                            <a class="service-link" href="/services/crating"><i class='bx bx-plus'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Video Showcase Style -->
    <style>
        .video-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .video-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.12) !important;
        }
    </style>

    <!-- Video Showcase Section -->
    <section class="video-showcase-area pb-100 pt-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="section-title text-center mb-5">
                <span class="sub-title" style="color: var(--green-color); font-weight: 700; text-transform: uppercase; letter-spacing: 2px;">Media Gallery</span>
                <h2 class="mt-2" style="font-size: 2.5rem; font-weight: 900;">Our Services in Action</h2>
                <p class="mx-auto" style="max-width: 600px; color: var(--grey-color);">Watch our operational highlights and logistics solutions to see how we handle your shipments with precision and care.</p>
            </div>

            <div class="row justify-content-center">
                <!-- Video 1 -->
                <div class="col-md-6 mb-4">
                    <div class="video-card" style="background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.05); height: 100%;">
                        <div class="video-wrapper" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; background: #000;">
                            <video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" controls>
                                <source src="{{ asset('assets/videos/service1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="p-4">
                            <h4 style="font-weight: 800; font-size: 1.3rem; margin-bottom: 10px;">Corporate Overview & Haulage Operations</h4>
                            <p class="mb-0" style="color: var(--grey-color); font-size: 0.95rem;">An introduction to our national and continental freight logistics operations across key ports.</p>
                        </div>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="col-md-6 mb-4">
                    <div class="video-card" style="background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.05); height: 100%;">
                        <div class="video-wrapper" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; background: #000;">
                            <video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" controls>
                                <source src="{{ asset('assets/videos/service2.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="p-4">
                            <h4 style="font-weight: 800; font-size: 1.3rem; margin-bottom: 10px;">Warehousing & Secure Cargo Handling</h4>
                            <p class="mb-0" style="color: var(--grey-color); font-size: 0.95rem;">A deep dive into our packaging, secure warehousing, and hazardous materials handling processes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
