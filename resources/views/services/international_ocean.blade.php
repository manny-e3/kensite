@extends('layouts.app')

@section('title', 'International Ocean Freight - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>International Ocean Freight Import and Export</h2>
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
                        <img src="{{ asset('assets/img/services/ocean.jpg') }}" style="width: 500px; height: 500px;" alt="Service Details">
                        <h3>International Ocean Freight Import and Export</h3>
                        <p>Ken Relocation Company Limited covers port to port and door to door global ocean freight forwarding services - bracing, blocking and container loading, general sea cargo shipping, specialized offshore cushioning system, over dimensional loads, heavy equipment, dangerous goods/hazardous materials (hazmat), high-value cargo, reefer (refrigerated containers), temperature sensitive products,cars/vehicle shipping.</p> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <img src="{{ asset('assets/img/services/conpic.jpg') }}" height="400" alt="Service Details">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details -->
@endsection
