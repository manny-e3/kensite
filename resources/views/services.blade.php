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
@endsection
