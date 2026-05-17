@extends('layouts.app')

@section('title', 'Local Home Relocation - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Local Home Relocation</h2>
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
                        <img src="{{ asset('assets/img/services/move.jpg') }}" alt="Service Details">
                        <h3>Local Home Relocation</h3>
                        <p>We make moving home/office as smooth as possible.Our movers are professionally trained and will guarantee a smooth change to your new place! We’ve been in the business for a long time, moving the personal belongings of hundreds of thousands of customers. We know all the details of the home/office moves and will ensure a stress-free experience.</p> 
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <img src="{{ asset('assets/img/services/creat.jpg') }}" height="400" alt="Service Details">
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <img src="{{ asset('assets/img/services/inter.jpg') }}" height="400" alt="Service Details">
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <img src="{{ asset('assets/img/services/packing.jpg') }}" height="400" alt="Service Details">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details -->
@endsection
