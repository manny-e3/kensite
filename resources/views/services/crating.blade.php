@extends('layouts.app')

@section('title', 'Crating Services - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Crating Services</h2>
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
                        <img src="{{ asset('assets/img/services/crat.jpg') }}" style="width: 500px; height: 500px;" alt="Service Details">
                        <h3>Crating Services</h3>
                        <p>Globally acceptable heat treated wooden crates and pallets provides
                        additional protection for air cargo, we help in handling your instant
                        pickup and customs needs from the airport to the final point of
                        delivery using our extensive network.</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details -->
@endsection
