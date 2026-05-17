@extends('layouts.app')

@section('title', 'Air Freight Import and Export Services - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Air Freight Import and Export Services</h2>
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
                        <img src="{{ asset('assets/img/services/air.jpg') }}" style="width: 500px; height: 500px;" alt="Service Details">
                        <h3>Air Freight Import and Export Services</h3>
                        <p>Our team offers professional and reliable air freight import, air freight export for freight/general cargo, valuable antique, parcels and courier services from door pick-up, customs clearance, and door delivery in 3-5 days for most destinations and customs services.  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details -->
@endsection
