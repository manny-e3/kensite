@extends('layouts.app')

@section('title', 'Transportation / Haulage - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Transportation / Haulage</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>/</span></li>
                            <li><a href="/services">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Service Details -->
    <div class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                @include('partials.service_sidebar')
                <div class="col-lg-9">
                    <div class="details-item">
                        <img src="https://www.clipartmax.com/png/full/290-2909438_air-transportation-multimodal-transport-logistics-cargo-shipping-services.png" alt="Service Details" style="width: 500px; height: 500px;" >
                        <h3>Transportation / Haulage</h3>
                        <p>We offer a speedy trucking opportunity to your freight and frozen shipment/perishable, goods are delivered the next day within the country! Distribution services with improved customer service, increased efficiency, reducing costs, subsidiary transportation get your shipments delivered on time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details -->
@endsection
