@extends('layouts.app')

@section('title', 'Ken Relocation - Premium Logistics & Moving Solutions')

@section('content')
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("{{ asset('assets/img/hero_bg.png') }}");
            background-size: cover;
            background-position: center;
            height: 90vh;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            z-index: 2;
            max-width: 800px;
        }

        .hero-content h1 {
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-btn-group {
            display: flex;
            gap: 15px;
        }

        .btn-premium {
            background-color: var(--green-color); /* Note: user's CSS defines green as red */
            color: white;
            padding: 15px 35px;
            font-weight: 700;
            border-radius: 50px;
            transition: transform 0.3s ease, background-color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-premium:hover {
            transform: translateY(-3px);
            background-color: #fff;
            color: var(--black-color);
        }

        .btn-outline-premium {
            border: 2px solid #fff;
            color: #fff;
            padding: 15px 35px;
            font-weight: 700;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .btn-outline-premium:hover {
            background: #fff;
            color: var(--black-color);
        }

        .trust-bar {
            background: #fff;
            padding: 30px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-top: -50px;
            position: relative;
            z-index: 10;
            border-radius: 10px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 15px;
            border-right: 1px solid #eee;
            padding: 0 20px;
        }

        .trust-item:last-child {
            border-right: none;
        }

        .trust-item i {
            font-size: 2.5rem;
            color: var(--green-color);
        }

        .trust-item h4 {
            font-size: 1.1rem;
            margin-bottom: 0;
            font-weight: 800;
        }

        .trust-item p {
            font-size: 0.85rem;
            margin-bottom: 0;
            color: #777;
        }

        .service-card-modern {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 45px rgba(0,0,0,0.07);
            transition: all 0.4s ease;
            height: 100%;
            border: 1px solid #f0f0f0;
        }

        .service-card-modern:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.12);
        }

        .service-card-img {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .service-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .service-card-modern:hover .service-card-img img {
            transform: scale(1.1);
        }

        .service-card-content {
            padding: 30px;
        }

        .service-card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 800;
        }

        .section-header {
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 5px;
            background: var(--green-color);
        }

        .why-choose-us {
            background-color: #f9fbfd;
            padding: 100px 0;
        }

        .feature-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            background: var(--green-color);
            color: white;
        }

        .feature-box i {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
            color: var(--green-color);
        }

        .feature-box:hover i, .feature-box:hover h3, .feature-box:hover p {
            color: white;
        }

        .stats-area {
            background: var(--black-color);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3.5rem;
            color: var(--green-color);
            margin-bottom: 10px;
        }

        .stat-item p {
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            opacity: 0.8;
        }

        .cta-section {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url("{{ asset('assets/img/services/move.jpg') }}");
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            color: white;
            text-align: center;
        }

        .cta-section h2 {
            color: white;
            font-size: 3.5rem;
            margin-bottom: 30px;
        }
    </style>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="hero-content animate__animated animate__fadeInLeft">
                <h1>Global Logistics & Seamless Relocation</h1>
                <p>Ken Relocation delivers precision, safety, and speed for your most valuable shipments. From local moves to international freight, we handle the complexity so you can focus on the journey.</p>
                <div class="hero-btn-group">
                    <a href="/contact" class="btn-premium">Get a Quote</a>
                    <a href="/services" class="btn-outline-premium">Our Services</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Trust Bar -->
    <div class="container">
        <div class="trust-bar">
            <div class="row">
                <div class="col-md-3">
                    <div class="trust-item">
                        <i class='bx bxs-ship'></i>
                        <div>
                            <h4>Global Reach</h4>
                            <p>International coverage</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="trust-item">
                        <i class='bx bxs-shield-check'></i>
                        <div>
                            <h4>Secure Handling</h4>
                            <p>Safety is our priority</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="trust-item">
                        <i class='bx bxs-time-five'></i>
                        <div>
                            <h4>Fast Delivery</h4>
                            <p>On-time every time</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="trust-item">
                        <i class='bx bxs-support'></i>
                        <div>
                            <h4>24/7 Support</h4>
                            <p>We are here for you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img animate__animated animate__fadeInLeft">
                        <img src="{{ asset('assets/img/hero_bg.png') }}" alt="About Ken Relocation" class="rounded shadow-lg">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content pl-lg-5 animate__animated animate__fadeInRight">
                        <div class="section-header">
                            <h2>Excellence in Every Move</h2>
                        </div>
                        <p style="color:black">Ken Relocation Company Limited is a full-line national, international, and continental logistics provider. We understand that every shipment tells a story, and every relocation is a new chapter. Our team provides customized solutions designed for global corporations and small businesses alike.</p>
                        <p style="color:black">With nearly two decades of experience, we have mastered the art of logistics, ensuring that your transition—whether a home move or a complex freight shipment—is handled with the utmost professionalism.</p>
                        <br>
                        <a href="/about" class="btn-premium mt-4">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modern Services Section -->
    <section class="services-modern ptb-100" style="background-color: #f4f7f9;">
        <div class="container">
            <div class="section-header text-center">
                <h2>Our Core Expertise</h2>
            </div>
            <div class="row">
                <!-- Transportation -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card-modern">
                        <div class="service-card-img">
                            <img src="https://www.clipartmax.com/png/full/290-2909438_air-transportation-multimodal-transport-logistics-cargo-shipping-services.png" alt="Transportation">
                        </div>
                        <div class="service-card-content">
                            <h3>Freight & Haulage</h3>
                            <p>Speedy trucking and multimodal solutions for your national and international freight needs.</p>
                            <a href="/services/transportation-haulage" class="text-danger font-weight-bold">View Details <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
                <!-- Warehousing -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card-modern">
                        <div class="service-card-img">
                            <img src="{{ asset('assets/img/warehousing_bg.png') }}" alt="Warehousing">
                        </div>
                        <div class="service-card-content">
                            <h3>Modern Warehousing</h3>
                            <p>Secure, scalable, and flexible storage facilities equipped with full security systems.</p>
                            <a href="/services/warehousing" class="text-danger font-weight-bold">View Details <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
                <!-- Relocation -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card-modern">
                        <div class="service-card-img">
                            <img src="{{ asset('assets/img/services/move.jpg') }}" alt="Relocation">
                        </div>
                        <div class="service-card-content">
                            <h3>Home Relocation</h3>
                            <p>Professionally trained movers guaranteeing a stress-free transition to your new home.</p>
                            <a href="/services/home-location" class="text-danger font-weight-bold">View Details <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="container">
            <div class="section-header text-center">
                <h2>Why Choose Ken Relocation</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box text-center">
                        <i class='bx bx-badge-check'></i>
                        <h3>Quality System</h3>
                        <p>Process-driven operations with rigorous checklists and barcoding for absolute precision.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box text-center">
                        <i class='bx bx-shuffle'></i>
                        <h3>Extreme Flexibility</h3>
                        <p>Adapting our operations to your specific business needs and unique logistical requests.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box text-center">
                        <i class='bx bxs-user-voice'></i>
                        <h3>Expert Team</h3>
                        <p>Experienced professionals well-versed in import/export documentation and cargo handling.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <div class="stats-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 stat-item">
                    <h3>99+</h3>
                    <p>Modern Vehicles</p>
                </div>
                <div class="col-md-3 stat-item">
                    <h3>420+</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="col-md-3 stat-item">
                    <h3>107+</h3>
                    <p>Team Experts</p>
                </div>
                <div class="col-md-3 stat-item">
                    <h3>19+</h3>
                    <p>Years Experience</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to start your next move?</h2>
            <p class="lead mb-5">Join hundreds of satisfied clients who trust Ken Relocation for their logistics needs.</p>
            <a href="/contact" class="btn-premium">Get a Free Estimate Now</a>
        </div>
    </section>
@endsection
