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
    <!-- Custom Style for About Page -->
    <style>
        .about-premium-section {
            padding: 80px 0;
            background-color: #fcfdfe;
        }
        .about-section-header {
            margin-bottom: 50px;
        }
        .about-section-header h2 {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--black-color);
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
        }
        .about-section-header h2::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--green-color);
            border-radius: 2px;
        }
        .about-section-header.text-left h2::after {
            left: 0;
            transform: none;
        }
        .about-card-modern {
            background: #fff;
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.04);
            border-top: 4px solid var(--green-color);
            transition: all 0.3s ease;
            height: 100%;
        }
        .about-card-modern:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.08);
        }
        .about-card-modern h3 {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--black-color);
        }
        .about-card-modern p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 0;
        }
        .about-service-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            border: 1px solid #f0f0f0;
            box-shadow: 0 8px 25px rgba(0,0,0,0.02);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            height: 100%;
        }
        .about-service-card:hover {
            border-color: var(--green-color);
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(255, 0, 0, 0.08);
        }
        .about-service-card i {
            font-size: 2.8rem;
            color: var(--green-color);
            margin-bottom: 20px;
            display: inline-block;
            transition: transform 0.3s ease;
        }
        .about-service-card:hover i {
            transform: scale(1.1) rotate(5deg);
        }
        .about-service-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: var(--black-color);
        }
        .about-service-card p {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 0;
            line-height: 1.6;
        }
        .network-section {
            background-color: #1a1a1a;
            color: #fff;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        .network-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 0, 0, 0.15) 0%, transparent 50%);
            pointer-events: none;
        }
        .network-section h2 {
            color: #fff;
        }
        .network-badge {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #e0e0e0;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 0.95rem;
            display: inline-block;
            margin: 6px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .network-badge:hover {
            background: var(--green-color);
            color: #fff;
            border-color: var(--green-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
        }
        .network-highlight {
            border-left: 4px solid var(--green-color);
            padding-left: 20px;
            margin-top: 25px;
        }
        .network-highlight h4 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .network-highlight p {
            color: #ccc;
            margin-bottom: 0;
        }
        .partners-section {
            padding: 80px 0;
            background: #fff;
        }
        .partner-card {
            background: #fdfdfd;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            font-weight: 700;
            color: var(--black-color);
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.01);
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .partner-card:hover {
            background: var(--green-color);
            color: #fff;
            border-color: var(--green-color);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 0, 0, 0.15);
        }
    </style>

    <!-- Company Overview -->
    <section class="about-premium-section">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-7 d-flex flex-column justify-content-center mb-4 mb-lg-0">
                    <div class="about-section-header text-left">
                        <h2>Our Core Identity</h2>
                    </div>
                    <p class="lead font-weight-bold" style="color: var(--black-color); font-size: 1.15rem; line-height: 1.8; margin-bottom: 20px;">
                        Ken Relocation Company Limited is a Nigeria and Africa region-based freight handling team covering main seaports and airports - Sea / Air freight logistics for import and export with a unique perspective to moving cargo around the globe.
                    </p>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: #555; margin-bottom: 25px;">
                        We specialize in sales logistics and exhibition services for several key industries including High Tech, Telecom, Automotive, Chemical, Pharmaceutical, Oil and Gas.
                    </p>
                    <div class="p-4 rounded-lg bg-light" style="border-left: 4px solid var(--green-color);">
                        <p class="mb-0 italic" style="font-style: italic; color: #444;">
                            "We have an enthusiastic work force with the necessary skills to provide satisfying results. Our team are ready to work together to actualize, always open to receive your requests, look forward for your cooperation and business excellence."
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="about-card-modern d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fa fa-heart" style="font-size: 3rem; color: var(--green-color); margin-right: 15px;"></i>
                                <h3 class="mb-0">Our Philosophy</h3>
                            </div>
                            <p style="font-size: 1.05rem; line-height: 1.8;">
                                We believe in keeping our clients happy by providing professional services, handling shipments with the utmost precision and importance for your complete satisfaction.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-top">
                            <p class="font-weight-bold mb-0" style="color: var(--black-color);">
                                <i class="fa fa-check-square text-danger mr-2" style="font-size: 1.2rem;"></i>
                                Professional Service at Competitive Prices
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="about-premium-section bg-light">
        <div class="container">
            <div class="about-section-header text-center">
                <h2>Our Logistics Capabilities</h2>
                <p class="lead text-muted">For all your shipment requests to and fro African Region Ports</p>
            </div>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-truck"></i>
                        <h4>Land Transportation</h4>
                        <p>International and regional land transportation services connecting markets seamlessly.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-ship"></i>
                        <h4>Sea Freight</h4>
                        <p>Reliable and efficient door-to-door sea freight cargo options for import and export.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-plane"></i>
                        <h4>Airfreight</h4>
                        <p>Fast and safe global airfreight services to cover urgent freight deliveries.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-exchange"></i>
                        <h4>Multimodal Transportation</h4>
                        <p>Optimized logistics using multiple transport modes to ensure speed and cost efficiency.</p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-briefcase"></i>
                        <h4>Project Transportation</h4>
                        <p>Bespoke planning and handling for complex infrastructure and industrial projects.</p>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-anchor"></i>
                        <h4>Oversized & Heavy Cargo</h4>
                        <p>Safe delivery of oversized, out-of-gauge, and heavyweight freight loads.</p>
                    </div>
                </div>
                <!-- Service 7 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-cubes"></i>
                        <h4>Consolidated Cargo</h4>
                        <p>Groupage and consolidation services to optimize smaller shipment costs.</p>
                    </div>
                </div>
                <!-- Service 8 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-shield"></i>
                        <h4>Valuable Goods</h4>
                        <p>Highly secure transportation and handling for valuable and sensitive cargo.</p>
                    </div>
                </div>
                <!-- Service 9 -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="about-service-card">
                        <i class="fa fa-file-text-o"></i>
                        <h4>Documentary Support</h4>
                        <p>Complete custom clearance documents and administrative regulatory support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Regional Network -->
    <section class="network-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-section-header text-left">
                        <h2>Strategic African Presence</h2>
                    </div>
                    <p class="lead" style="color: #eee;">
                        We are located in major cities in Nigeria, with our strategic team across Africa region ports and logistics network globally 🌎
                    </p>
                    <div class="network-highlight">
                        <h4>Logistics Made Easy</h4>
                        <p>Specialized delivery services spanning West & Central, North, and South Africa region ports.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap justify-content-start justify-content-lg-center">
                        <span class="network-badge">Eritrea</span>
                        <span class="network-badge">Ghana</span>
                        <span class="network-badge">Kenya</span>
                        <span class="network-badge">Madagascar</span>
                        <span class="network-badge">Malawi</span>
                        <span class="network-badge">Rwanda</span>
                        <span class="network-badge">Sénégal</span>
                        <span class="network-badge">Somalia</span>
                        <span class="network-badge">Guinea</span>
                        <span class="network-badge">Somaliland</span>
                        <span class="network-badge">South Sudan</span>
                        <span class="network-badge">Sudan</span>
                        <span class="network-badge">Tanzania</span>
                        <span class="network-badge">Uganda</span>
                        <span class="network-badge">Zambia</span>
                        <span class="network-badge">Zimbabwe</span>
                        <span class="network-badge">Morocco</span>
                        <span class="network-badge">Dakar - Sénégal</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Partners -->
    <section class="partners-section">
        <div class="container">
            <div class="about-section-header text-center">
                <h2>Our Global Network</h2>
                <p class="lead text-muted">Connecting you to every corner of the world through our leading industry partners</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">North America</div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">South America</div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">Asia</div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">Middle East</div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">Europe</div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">Australia</div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">Russia</div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">Oceanic</div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-card">New Zealand</div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->
@endsection
