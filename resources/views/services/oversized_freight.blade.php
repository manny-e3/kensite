@extends('layouts.app')

@section('title', 'Oversized Freight Services - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Oversized Freight Services for International Shipments</h2>
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
                        <img src="{{ asset('assets/img/services/size.jpg') }}" style="width: 500px; height: 500px;" alt="Service Details">
                        <h3>Oversized Freight Services for International Shipments</h3>
                        <p>Providing your company with oversized freight specialists on import or export services including customs clearance of your oversized, heavy equipment, heavy machinery, or project freight.</p> 
                        <p>Oversized or project freight is our priority with specialized equipment – air ride, removable goose-neck flatbed, heavy haulage trucking and refrigerated trucks. We also provide lift-on lift-off freight services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details -->
@endsection
