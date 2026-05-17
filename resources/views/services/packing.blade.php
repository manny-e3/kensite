@extends('layouts.app')

@section('title', 'Packing, Wrapping and Pallet Strapping - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Packing, Wrapping and Pallet Strapping</h2>
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
                        <img src="{{ asset('assets/img/services/creat.jpg') }}" style="width: 500px; height: 500px;" alt="Service Details">
                        <h3>Packing, Wrapping and Pallet Strapping</h3>
                        <p>Ken Relocation Company Limited offers a comprehensive range of warehousing and distribution operations to ensure most successful delivery of all kinds of commodity ensuring reliable and flexible with our scalable and flexible storage facilities and full security systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details -->
@endsection
