@extends('layouts.app')

@section('title', 'Hazardous Materials & Dangerous Goods Handling - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Hazardous Materials & Dangerous Goods Handling</h2>
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
                        <img src="{{ asset('assets/img/services/danger.jpg') }}" style="width: 500px; height: 500px;" alt="Service Details">
                        <h3>Hazardous Materials & Dangerous Goods Handling</h3>
                        <p>Ken Relocation Company Limited are independent certified hazardous materials packer and shipper. We standard a wide range of hazardous materials/dangerous goods UN certified packing, marking, labels, shipper’s declaration or multimodal for dangerous goods shipment care throughout the transport process. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details -->
@endsection
