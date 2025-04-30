@extends('layouts.app')

@section('content')
<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Agricultural Power Solutions" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.7);">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Agricultural Power Solutions</h1>
                <p class="animated fadeInRight">Specialized electric power distribution systems for modern farming</p>
                <div class="carousel-buttons animated fadeInUp">
                    <a class="btn" href="{{ route('services') }}">Our Services</a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Farm Power Systems">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Farm Power Systems</h1>
                <p class="animated fadeInRight">Customized power solutions for agricultural operations</p>
                <div class="carousel-buttons animated fadeInUp">
                    <a class="btn btn-outline" href="{{ route('about') }}">About Us</a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Agricultural Power Support">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Agricultural Power Support</h1>
                <p class="animated fadeInRight">24/7 technical support for your farming power needs</p>
                <div class="carousel-buttons animated fadeInUp">
                    <a class="btn" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->

<!-- Feature Top Start -->
<div class="feature-top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-check-circle"></i>
                    <h3>Certified Power Systems</h3>
                    <p>Industry Approved Solutions</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="fa fa-user-tie"></i>
                    <h3>Power Experts</h3>
                    <p>Agricultural Power Specialists</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-thumbs-up"></i>
                    <h3>Proven Efficiency</h3>
                    <p>Optimized Power Distribution</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-handshake"></i>
                    <h3>24/7 Support</h3>
                    <p>Always Here for Your Farm</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Top End -->

<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="About Agricultural Power Solutions" style="object-fit: cover; height: 400px;">
                    <div class="about-experience">
                        <h2>25+</h2>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header">
                    <h2>Your Agricultural Power Partner</h2>
                </div>
                <div class="about-text">
                    <p class="lead mb-4">We specialize in providing efficient electric power distribution systems for agricultural operations. Our expert team ensures reliable power solutions tailored to your specific farming needs.</p>
                    <div class="about-features mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-check">
                                    <i class="fa fa-check"></i>
                                    <span>Agricultural Power Experts</span>
                                </div>
                                <div class="feature-check">
                                    <i class="fa fa-check"></i>
                                    <span>Free Farm Assessment</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-check">
                                    <i class="fa fa-check"></i>
                                    <span>Transparent Cost Estimates</span>
                                </div>
                                <div class="feature-check">
                                    <i class="fa fa-check"></i>
                                    <span>24/7 Power Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn" href="{{ route('about') }}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header">
            <h2>Our Agricultural Power Services</h2>
            <p>Specialized power distribution solutions for farming needs</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <h3>Farm Power Grid Setup</h3>
                    <p>
                        Custom power grid solutions for agricultural operations
                        Ensuring reliable power distribution to your farm
                    </p>
                    <a class="btn" href="{{ route('services') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-industry"></i>
                    </div>
                    <h3>Irrigation Power Systems</h3>
                    <p>
                        Specialized power setups for irrigation systems
                        Optimized for agricultural water management
                    </p>
                    <a class="btn" href="{{ route('services') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-solar-panel"></i>
                    </div>
                    <h3>Renewable Energy Integration</h3>
                    <p>
                        Solar and wind power solutions
                        Sustainable energy for farming operations
                    </p>
                    <a class="btn" href="{{ route('services') }}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Why Choose Us Start -->
<div class="why">
    <div class="container">
        <div class="section-header">
            <h2>Why Choose Us</h2>
            <p>Your trusted partner in agricultural power distribution</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="feature-item">
                    <i class="fas fa-award"></i>
                    <h3>Agricultural Power Experts</h3>
                    <p>Our team brings years of experience in farm power systems and agricultural operations.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-user-clock"></i>
                    <h3>Reliable Service</h3>
                    <p>We understand the importance of uninterrupted power for farming operations.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-img">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Why Choose Us" style="object-fit: cover; height: 300px;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-item">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Farmer-Focused Solutions</h3>
                    <p>Your agricultural success and satisfaction are our top priorities.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-dollar-sign"></i>
                    <h3>Transparent Pricing</h3>
                    <p>Clear and upfront pricing with no hidden fees.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us End -->

<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about our agricultural power services</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="faq-item">
                    <h3>What power solutions do you offer for farms?</h3>
                    <p>We provide comprehensive power distribution systems including farm power grid setup, irrigation power systems, and renewable energy integration solutions.</p>
                </div>
                <div class="faq-item">
                    <h3>How do you ensure reliable power supply?</h3>
                    <p>Our systems are designed with redundancy and backup solutions to ensure uninterrupted power supply for critical farming operations.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="faq-item">
                    <h3>Do you offer emergency support?</h3>
                    <p>Yes, we provide 24/7 emergency power support to ensure your farming operations continue without disruption.</p>
                </div>
                <div class="faq-item">
                    <h3>What is the cost of your services?</h3>
                    <p>We offer customized solutions based on your specific needs. Contact us for a free farm assessment and detailed cost estimate.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        <div class="section-header">
            <h2>What Our Farmers Say</h2>
            <p>Real feedback from satisfied agricultural clients</p>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-1.jpg" alt="Om Prakash Nehra">
                </div>
                <div class="testimonial-content">
                    <h3>Om Prakash Nehra</h3>
                    <h4>Farm Owner</h4>
                    <div class="testimonial-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>
                        "The team provided exceptional service throughout my farm power distribution project. Their expertise and dedication led to a successful and efficient power system for my agricultural operations."
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-2.jpg" alt="Tanishq" style="object-fit: cover; height: 100px;">
                </div>
                <div class="testimonial-content">
                    <h3>Tanishq</h3>
                    <h4>Farm Owner</h4>
                    <div class="testimonial-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Professional, knowledgeable, and responsive. They guided me through a complex farm power distribution project with expertise and attention to detail."
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Call to Action Start -->
<div class="cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <h2>Need Agricultural Power Assistance?</h2>
                <p>Contact us today for a free farm power assessment with our expert technicians.</p>
            </div>
            <div class="col-md-3">
                <a class="btn btn-custom" href="{{ route('contact') }}">Contact Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action End -->
@endsection

@push('styles')
<style>
.carousel-buttons {
    margin-top: 20px;
}
.carousel-buttons .btn {
    margin: 0 10px;
}
.btn-outline {
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
}
.btn-outline:hover {
    background: #aa9166;
    border-color: #aa9166;
}
.about-experience {
    position: absolute;
    right: -30px;
    bottom: 30px;
    padding: 20px;
    background: #aa9166;
    color: #fff;
    text-align: center;
    border-radius: 5px;
}
.about-experience h2 {
    font-size: 36px;
    margin: 0;
    color: #fff;
}
.feature-check {
    margin-bottom: 15px;
}
.feature-check i {
    color: #aa9166;
    margin-right: 10px;
}

/* Updated Testimonial Styles */
.testimonial {
    padding: 60px 0;
    background: #f6f6f6;
}
.testimonial-item {
    margin: 15px;
    padding: 30px;
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
}
.testimonial-img {
    width: 100px;
    height: 100px;
    overflow: hidden;
    margin: 0 auto 15px;
    border-radius: 100px;
    border: 5px solid #f6f6f6;
}
.testimonial-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.testimonial-content {
    text-align: center;
}
.testimonial-content h3 {
    color: #aa9166;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 5px;
}
.testimonial-content h4 {
    font-size: 16px;
    color: #666666;
    margin-bottom: 10px;
}
.testimonial-stars {
    color: #ffd700;
    margin-bottom: 15px;
}
.testimonial-stars i {
    margin: 0 1px;
}
.testimonial-content p {
    font-style: italic;
    margin: 0;
    font-size: 16px;
    line-height: 1.6;
}
.owl-nav {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}
.owl-prev, .owl-next {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #aa9166;
    background: #ffffff;
    border-radius: 45px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
    margin: 0 8px;
    transition: all 0.3s;
}
.owl-prev:hover, .owl-next:hover {
    background: #aa9166;
    color: #ffffff;
}

.cta {
    background: #1a1a1a;
    padding: 45px 0;
    color: #fff;
    margin-top: 30px;
}
.cta h2 {
    color: #fff;
    margin: 0;
}
.cta p {
    margin: 10px 0 0 0;
    color: #999;
}
.btn-custom {
    background: #aa9166;
    color: #fff;
    border: none;
}
.btn-custom:hover {
    background: #8a7555;
    color: #fff;
}
.section-header p {
    color: #666;
    margin-top: -10px;
}
.carousel-item {
    height: calc(100vh - 170px);
}
.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.7);
}
.auth-cta {
    background: linear-gradient(rgba(18, 21, 24, 0.9), rgba(18, 21, 24, 0.9)), url('https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') center center no-repeat;
    background-size: cover;
    padding: 60px 0;
    position: relative;
    text-align: center;
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function(){
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: false,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ]
    });
});
</script>
@endpush 