@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Agricultural Power Blog</h2>
            </div>
            <div class="col-12">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('blog') }}">Blog</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header">
            <h2>Latest Articles</h2>
            <p>Insights and updates on agricultural power distribution</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Smart Grid Technology">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">The Future of Smart Grids in Agriculture</a></h3>
                        <p>
                            Exploring how smart grid technology is revolutionizing power distribution in modern farming operations, enabling real-time monitoring and optimization of energy usage.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Adam Phillips</p>
                            <p><i class="fas fa-calendar-alt"></i> March 15, 2024</p>
                            <p><i class="fas fa-tag"></i> Smart Grid</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Solar Power">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Solar Power Solutions for Farms</a></h3>
                        <p>
                            A comprehensive guide to implementing solar power systems in agricultural settings, reducing operational costs and environmental impact.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Dylan Adams</p>
                            <p><i class="fas fa-calendar-alt"></i> March 10, 2024</p>
                            <p><i class="fas fa-tag"></i> Solar Power</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Irrigation Systems">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Energy Efficiency in Irrigation Systems</a></h3>
                        <p>
                            How to optimize power usage in agricultural irrigation systems for maximum efficiency and cost savings.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Gloria Edwards</p>
                            <p><i class="fas fa-calendar-alt"></i> March 5, 2024</p>
                            <p><i class="fas fa-tag"></i> Irrigation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1532601224476-15c79f2f7a51?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Wind Energy">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Wind Energy for Agricultural Operations</a></h3>
                        <p>
                            Harnessing wind power for sustainable agricultural energy needs, reducing dependency on traditional power sources.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Josh Dunn</p>
                            <p><i class="fas fa-calendar-alt"></i> February 28, 2024</p>
                            <p><i class="fas fa-tag"></i> Wind Energy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Smart Farm">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Smart Farm Power Management</a></h3>
                        <p>
                            Implementing advanced power management systems for modern agricultural operations, improving efficiency and reducing costs.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Adam Phillips</p>
                            <p><i class="fas fa-calendar-alt"></i> February 20, 2024</p>
                            <p><i class="fas fa-tag"></i> Smart Farm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Power Grid">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Agricultural Power Grid Solutions</a></h3>
                        <p>
                            Comprehensive power grid solutions for agricultural operations, ensuring reliable and efficient energy distribution.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Dylan Adams</p>
                            <p><i class="fas fa-calendar-alt"></i> February 15, 2024</p>
                            <p><i class="fas fa-tag"></i> Power Grid</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Electric Farm Equipment">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Electric Farm Equipment Revolution</a></h3>
                        <p>
                            The transition to electric-powered farm equipment and its impact on agricultural operations and energy consumption.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Sarah Johnson</p>
                            <p><i class="fas fa-calendar-alt"></i> February 10, 2024</p>
                            <p><i class="fas fa-tag"></i> Equipment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1589923188900-85dae523342b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Greenhouse">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Power Solutions for Greenhouses</a></h3>
                        <p>
                            Specialized power distribution systems for modern greenhouse operations, ensuring optimal growing conditions.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Michael Brown</p>
                            <p><i class="fas fa-calendar-alt"></i> February 5, 2024</p>
                            <p><i class="fas fa-tag"></i> Greenhouse</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Digital Farm">
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Digital Agriculture Power Management</a></h3>
                        <p>
                            How digital technologies are transforming power management in modern agricultural operations.
                        </p>
                        <div class="blog-meta">
                            <p><i class="fas fa-user"></i> Emma Wilson</p>
                            <p><i class="fas fa-calendar-alt"></i> January 30, 2024</p>
                            <p><i class="fas fa-tag"></i> Digital Farm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Newsletter Start -->
<div class="newsletter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Subscribe to Our Newsletter</h2>
                <p>
                    Stay updated with the latest news and insights about agricultural power distribution.
                </p>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <button class="btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->
@endsection

@push('styles')
<style>
    .blog-item {
        margin-bottom: 30px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    .blog-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
    .blog-img {
        position: relative;
        overflow: hidden;
        border-radius: 5px 5px 0 0;
    }
    .blog-img img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: all 0.3s ease;
    }
    .blog-item:hover .blog-img img {
        transform: scale(1.1);
    }
    .blog-text {
        padding: 20px;
    }
    .blog-text h3 {
        margin-bottom: 15px;
        color: #333;
    }
    .blog-text h3 a {
        color: #333;
        transition: all 0.3s ease;
    }
    .blog-text h3 a:hover {
        color: #2c3e50;
    }
    .blog-text p {
        margin-bottom: 15px;
        color: #666;
        line-height: 1.6;
    }
    .blog-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        padding-top: 15px;
        border-top: 1px solid #eee;
    }
    .blog-meta p {
        margin: 0;
        color: #666;
        font-size: 14px;
    }
    .blog-meta i {
        color: #2c3e50;
        margin-right: 5px;
    }
    .newsletter {
        background: #121518;
        padding: 60px 0;
        margin-top: 45px;
    }
    .newsletter h2 {
        color: #2c3e50;
        margin-bottom: 15px;
    }
    .newsletter p {
        color: #999;
        margin-bottom: 0;
    }
    .newsletter .form-group {
        margin-bottom: 0;
    }
    .newsletter input {
        height: 50px;
        border: 2px solid #2c3e50;
        border-radius: 0;
        background: transparent;
        color: #fff;
    }
    .newsletter input::placeholder {
        color: #999;
    }
    .newsletter .btn {
        height: 50px;
        padding: 0 30px;
        background: #2c3e50;
        color: #fff;
        border: none;
        border-radius: 0;
        transition: all 0.3s ease;
    }
    .newsletter .btn:hover {
        background: #fff;
        color: #2c3e50;
        border: 2px solid #2c3e50;
    }
</style>
@endpush
