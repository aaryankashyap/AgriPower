@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
            <div class="col-12">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="About AgriPower Solutions" style="object-fit: cover; height: 400px;">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header">
                    <h2>Learn About Us</h2>
                </div>
                <div class="about-text">
                    <p>
                        AgriPower Solutions is a leading provider of electric power distribution systems for agricultural operations. We are committed to providing efficient and reliable power solutions that drive agricultural growth and sustainability.
                    </p>
                    <p>
                        Our team of experienced power engineers specializes in various aspects of agricultural power systems, ensuring that you get the best power distribution solutions for your specific farming needs. We believe in innovation, sustainability, and putting our farmers first.
                    </p>
                    <a class="btn" href="{{ route('team') }}">Meet Our Experts</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Timeline Start -->
<div class="timeline">
    <div class="container">
        <div class="section-header">
            <h2>Our Journey in Agricultural Power</h2>
        </div>
        <div class="timeline-start">
            <div class="timeline-container left">
                <div class="timeline-content">
                    <h2><span>2020</span>Smart Farm Solutions</h2>
                    <p>
                        Launched our smart farm power management systems, revolutionizing agricultural power distribution.
                    </p>
                </div>
            </div>
            <div class="timeline-container right">
                <div class="timeline-content">
                    <h2><span>2019</span>Renewable Energy Integration</h2>
                    <p>
                        Expanded our services to include solar and wind power solutions for agricultural operations.
                    </p>
                </div>
            </div>
            <div class="timeline-container left">
                <div class="timeline-content">
                    <h2><span>2018</span>Irrigation Power Systems</h2>
                    <p>
                        Developed specialized power solutions for agricultural irrigation systems.
                    </p>
                </div>
            </div>
            <div class="timeline-container right">
                <div class="timeline-content">
                    <h2><span>2017</span>Company Foundation</h2>
                    <p>
                        Established AgriPower Solutions with a focus on agricultural power distribution.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Timeline End -->

<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <h2>Meet Our Power Experts</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="team-item text-center">
                    <div class="team-img d-flex justify-content-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Dr. Rajesh Kumar" style="width: 150px; height: 150px; object-fit: contain;">
                    </div>
                    <div class="team-text text-center">
                        <h2>Dr. Rajesh Kumar</h2>
                        <p>Agricultural Power Systems Engineer</p>
                        <div class="team-social">
                            <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item text-center">
                    <div class="team-img d-flex justify-content-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" alt="Dr. Priya Sharma" style="width: 150px; height: 150px; object-fit: contain;">
                    </div>
                    <div class="team-text text-center">
                        <h2>Dr. Priya Sharma</h2>
                        <p>Renewable Energy Specialist</p>
                        <div class="team-social">
                            <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item text-center">
                    <div class="team-img d-flex justify-content-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Dr. Amit Patel" style="width: 150px; height: 150px; object-fit: contain;">
                    </div>
                    <div class="team-text text-center">
                        <h2>Dr. Amit Patel</h2>
                        <p>Smart Grid Technology Expert</p>
                        <div class="team-social">
                            <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item text-center">
                    <div class="team-img d-flex justify-content-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" alt="Dr. Neha Gupta" style="width: 150px; height: 150px; object-fit: contain;">
                    </div>
                    <div class="team-text text-center">
                        <h2>Dr. Neha Gupta</h2>
                        <p>Irrigation Power Systems Specialist</p>
                        <div class="team-social">
                            <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection
