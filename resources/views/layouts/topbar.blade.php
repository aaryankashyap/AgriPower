<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <h1>AgriPower Solutions</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="top-bar-right">
                    <div class="text">
                        <h2>24/7</h2>
                        <p>Power Support</p>
                    </div>
                    <div class="text">
                        <h2>{{ config('site.phone') }}</h2>
                        <p>Call Us For Free Assessment</p>
                    </div>
                    <div class="social">
                        <a href="{{ config('site.social.twitter') }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ config('site.social.facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ config('site.social.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{ config('site.social.instagram') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End --> 