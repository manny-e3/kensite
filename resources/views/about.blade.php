@extends('layouts.app')

@section('title', 'About Us - Ken Relocation')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>About</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>/</span></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About -->
    <div class="about-area two three pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/treminal.jpg') }}" alt="About">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>Who We Are</h2>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <p>Ken Relocation Company Limited is a full line of national, international and continental logistics provider and freight forwarding company. Our team understands alike changes every day, and the need for a solution to fit your unique special shipping services including custom shipping solutions /customized solutions, general logistics, warehousing, and integrated solutions designed for small to mid-sized businesses, large companies and global corporations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Work -->
    <section class="work-area three five pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-left">
                        <div class="section-title">
                            <h2 class="sub-title">Why Choose Us</h2>
                        </div>
                        <ul>
                            <li>
                                <i class="flaticon-cargo-ship"></i>
                                <h3>Quality System</h3>
                                <p>We are process driven, including check lists for our operators and handlers, in addition to barcoding all parcels to ensure quality and efficiencies. </p>
                            </li>
                            <li>
                                <i class="flaticon-eye"></i>
                                <h3>Flexibility</h3>
                                <p>We realize the importance of adapting our operations to your specific needs. Our professional team is always ready to assess and analyze your business to conform to your requests in order to simplify your operations.</p>
                            </li>
                            <li>
                                <i class="flaticon-shield-border"></i>
                                <h3>Experienced and friendly staff</h3>
                                <p>All of our employees are experienced in all aspects of the freight forwarding process including import and export documentation requirements for all types of cargo.</p>
                            </li>
                            <li>
                                <i class="flaticon-security-purposes"></i>
                                <h3>Reliable shipping</h3>
                                <p>We always strive to provide our customers fast & reliable freight services so that they always remain on top with the fast pace of market.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item one">
                                <img src="{{ asset('assets/img/home-one/counter-shape.png') }}" alt="Counter">
                                <h3><span class="odometer" data-count="99">00</span></h3>
                                <p>Vehicles</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <img src="{{ asset('assets/img/home-one/counter-shape.png') }}" alt="Counter">
                                <h3><span class="odometer" data-count="420">00</span></h3>
                                <p>Active customer</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item">
                                <img src="{{ asset('assets/img/home-one/counter-shape.png') }}" alt="Counter">
                                <h3><span class="odometer" data-count="107">00</span></h3>
                                <p>Team member</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="counter-item two">
                                <img src="{{ asset('assets/img/home-one/counter-shape.png') }}" alt="Counter">
                                <h3><span class="odometer" data-count="19">00</span></h3>
                                <p>Years experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->
@endsection
