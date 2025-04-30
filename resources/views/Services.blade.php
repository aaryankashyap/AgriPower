@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Services</h2>
            </div>
            <div class="col-12">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('services') }}">Services</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header">
            <h2>Our Agricultural Power Services</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <h3>Farm Power Grid Setup</h3>
                    <p>
                        Custom power grid solutions for agricultural operations, ensuring reliable power distribution to your farm.
                    </p>
                    <a class="btn" href="{{ route('team') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-industry"></i>
                    </div>
                    <h3>Irrigation Power Systems</h3>
                    <p>
                        Specialized power setups for irrigation systems, optimized for agricultural water management.
                    </p>
                    <a class="btn" href="{{ route('team') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <h3>Agricultural Industry Solutions</h3>
                    <p>
                        Large scale farming power management and comprehensive power distribution systems.
                    </p>
                    <a class="btn" href="{{ route('team') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <h3>Emergency Power Support</h3>
                    <p>
                        Backup power solutions for critical farm operations and quick response during outages.
                    </p>
                    <a class="btn" href="{{ route('team') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-sun"></i>
                    </div>
                    <h3>Renewable Energy Integration</h3>
                    <p>
                        Solar and wind power solutions for agricultural use and sustainable farming.
                    </p>
                    <a class="btn" href="{{ route('team') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-microchip"></i>
                    </div>
                    <h3>Smart Farm Power Systems</h3>
                    <p>
                        Automated power distribution for modern farming with advanced monitoring and control.
                    </p>
                    <a class="btn" href="{{ route('team') }}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Feature Start -->
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-header">
                    <h2>Why Choose Our Services</h2>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="fa fa-bolt"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>Expert Power Solutions</h3>
                        <p>
                            Our team follows the highest standards of power distribution and safety protocols.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="fa fa-chart-line"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>Efficiency & Reliability</h3>
                        <p>
                            We provide efficient power solutions while maintaining complete reliability and uptime.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>Sustainable Solutions</h3>
                        <p>
                            We are committed to providing environmentally friendly power solutions for agriculture.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="feature-img" style="background: #000; display: flex; align-items: center; justify-content: center; height: 700px;">
                    <img src="img/1.webp" alt="Tractor in Field" style="object-fit: cover; height: 100%; width: 100%;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->
@endsection
