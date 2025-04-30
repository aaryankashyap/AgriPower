@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Agricultural Power Projects</h2>
            </div>
            <div class="col-12">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('projects') }}">Power Projects</a>
            </div>
        </div>
    </div>
</div>

<div class="background">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="background-content">
                    <h2>Powering Modern Agriculture</h2>
                    <p class="lead">Efficient electric power distribution is the backbone of modern agricultural operations. Our specialized solutions ensure reliable power supply for all your farming needs.</p>
                    <div class="background-features">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fas fa-bolt"></i>
                                    <h4>Reliable Power Supply</h4>
                                    <p>24/7 power distribution for critical farming operations</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fas fa-tint"></i>
                                    <h4>Irrigation Systems</h4>
                                    <p>Power solutions for efficient water management</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fas fa-solar-panel"></i>
                                    <h4>Renewable Energy</h4>
                                    <p>Sustainable power options for agricultural use</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fas fa-microchip"></i>
                                    <h4>Smart Technology</h4>
                                    <p>Advanced power management systems</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="background-img">
                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Agricultural Power Distribution" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio">
    <div class="container">
        <div class="section-header">
            <h2>Our Agricultural Power Projects</h2>
            <p>Specialized power distribution solutions for modern farming</p>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".solar">Solar Power</li>
                    <li data-filter=".wind">Wind Energy</li>
                    <li data-filter=".smart">Smart Grid</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item solar">
                <div class="portfolio-wrap">
                    <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Smart Irrigation System">
                    <figure>
                        <p>Solar Power</p>
                        <a href="#">Solar-Powered Irrigation System</a>
                        <span>15-Jan-2024</span>
                    </figure>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item smart">
                <div class="portfolio-wrap">
                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Agricultural Power Grid">
                    <figure>
                        <p>Smart Grid</p>
                        <a href="#">Farm Power Grid Installation</a>
                        <span>10-Jan-2024</span>
                    </figure>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wind">
                <div class="portfolio-wrap">
                    <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Wind Farm Power">
                    <figure>
                        <p>Wind Energy</p>
                        <a href="#">Wind-Powered Farm Equipment</a>
                        <span>05-Jan-2024</span>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.background {
    position: relative;
    padding: 80px 0;
    overflow: hidden;
}

.background::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
    opacity: 0.1;
    z-index: -1;
}

.background-content {
    position: relative;
    z-index: 1;
}

.background-content h2 {
    color: #aa9166;
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 20px;
}

.background-content .lead {
    color: #666666;
    font-size: 18px;
    margin-bottom: 30px;
}

.background-features {
    margin-top: 30px;
}

.feature-item {
    margin-bottom: 30px;
    padding: 20px;
    background: #ffffff;
    border: 1px solid #e1e1e1;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.feature-item i {
    font-size: 30px;
    color: #aa9166;
    margin-bottom: 15px;
}

.feature-item h4 {
    color: #121518;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.feature-item p {
    color: #666666;
    margin: 0;
}

.background-img {
    position: relative;
    padding: 20px;
    background: #ffffff;
    border: 1px solid #e1e1e1;
}

.background-img img {
    width: 100%;
    border-radius: 5px;
}

.portfolio {
    padding: 80px 0;
    background: #f8f9fa;
}

.portfolio .section-header {
    margin-bottom: 40px;
}

.portfolio .section-header h2 {
    color: #121518;
    font-size: 40px;
    font-weight: 700;
}

.portfolio .section-header p {
    color: #666666;
    font-size: 18px;
}

#portfolio-flters {
    padding: 0;
    margin: 0 0 30px 0;
    list-style: none;
    text-align: center;
}

#portfolio-flters li {
    cursor: pointer;
    display: inline-block;
    padding: 8px 20px;
    font-size: 16px;
    font-weight: 500;
    color: #666666;
    margin: 0 5px;
    border: 1px solid #e1e1e1;
    border-radius: 4px;
    transition: all 0.3s ease;
}

#portfolio-flters li:hover,
#portfolio-flters li.filter-active {
    color: #ffffff;
    background: #aa9166;
    border-color: #aa9166;
}

.portfolio-container {
    position: relative;
    overflow: hidden;
}

.portfolio-item {
    position: relative;
    margin-bottom: 30px;
}

.portfolio-wrap {
    position: relative;
    overflow: hidden;
    border-radius: 5px;
}

.portfolio-wrap img {
    width: 100%;
    transition: all 0.3s ease;
}

.portfolio-wrap figure {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    color: #ffffff;
}

.portfolio-wrap figure p {
    margin: 0 0 5px 0;
    font-size: 14px;
    color: #aa9166;
}

.portfolio-wrap figure a {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 5px;
    text-decoration: none;
}

.portfolio-wrap figure span {
    font-size: 14px;
    color: #999999;
}

.portfolio-item:hover .portfolio-wrap img {
    transform: scale(1.1);
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    var $container = $('.portfolio-container');
    
    $container.isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    
    $('#portfolio-flters li').on('click', function() {
        $('#portfolio-flters li').removeClass('filter-active');
        $(this).addClass('filter-active');
        
        var selector = $(this).data('filter');
        $container.isotope({ filter: selector });
        return false;
    });
});
</script>
@endpush 