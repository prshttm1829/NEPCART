@extends('layout.master')

@section('container')

<!-- Hero Section -->
<div class="container-fluid bg-primary text-white py-5 mb-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">About NEPCART</h1>
        <p class="lead">Your trusted online shopping destination in Nepal</p>
    </div>
</div>

<!-- About Section -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img src="{{ asset('assets/frontend/img/about.png') }}" class="img-fluid rounded shadow" alt="About NEPCART">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3">Who We Are</h2>
            <p class="text-muted">
                NEPCART is a fast-growing eCommerce platform dedicated to providing high-quality products at affordable prices. 
                We aim to make online shopping simple, secure, and enjoyable for everyone.
            </p>
            <p class="text-muted">
                From electronics to fashion, we offer a wide range of products delivered right to your doorstep.
            </p>
        </div>
    </div>
</div>

<!-- Mission Vision Section -->
<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-6 mb-4">
            <div class="p-4 border rounded shadow-sm h-100">
                <i class="fa fa-bullseye fa-3x text-primary mb-3"></i>
                <h4 class="fw-bold">Our Mission</h4>
                <p class="text-muted">
                    To provide the best online shopping experience with quality products, fast delivery, and excellent customer service.
                </p>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="p-4 border rounded shadow-sm h-100">
                <i class="fa fa-eye fa-3x text-primary mb-3"></i>
                <h4 class="fw-bold">Our Vision</h4>
                <p class="text-muted">
                    To become Nepal’s most trusted and customer-centric eCommerce platform.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="container py-5">
    <div class="row text-center">
        <h2 class="fw-bold mb-5">Why Choose Us?</h2>

        <div class="col-md-3">
            <div class="p-3">
                <i class="fa fa-truck fa-2x text-primary mb-3"></i>
                <h6>Fast Delivery</h6>
                <p class="text-muted small">Quick and reliable delivery across Nepal.</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3">
                <i class="fa fa-lock fa-2x text-primary mb-3"></i>
                <h6>Secure Payment</h6>
                <p class="text-muted small">Safe and secure payment methods.</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3">
                <i class="fa fa-thumbs-up fa-2x text-primary mb-3"></i>
                <h6>Quality Products</h6>
                <p class="text-muted small">We ensure top quality products.</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3">
                <i class="fa fa-headphones fa-2x text-primary mb-3"></i>
                <h6>24/7 Support</h6>
                <p class="text-muted small">Always here to help you anytime.</p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="container py-5">
    <h2 class="text-center fw-bold mb-5">Meet Our Team</h2>
    <div class="row text-center">

        <div class="col-md-4">
            <div class="card border-0 shadow">
           <center>    <img src="{{ asset('assets/frontend/img/profile.jpeg') }}" style="border-radius: 50%; height:100px; width:100px; margin-top:15px;" class="card-img-top" alt="Team"></center> 
                <div class="card-body">
                    <h5 class="fw-bold">Purushottam Yadav</h5>
                    <p class="text-muted small">Founder & CEO</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
           <center>    <img src="{{ asset('assets/frontend/img/profile.jpeg') }}" style="border-radius: 50%; height:100px; width:100px; margin-top:15px;" class="card-img-top" alt="Team"></center> 
                <div class="card-body">
                    <h5 class="fw-bold">Purshottam Yadav</h5>
                    <p class="text-muted small">Founder & CEO</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
           <center>    <img src="{{ asset('assets/frontend/img/profile.jpeg') }}" style="border-radius: 50%; height:100px; width:100px; margin-top:15px;" class="card-img-top" alt="Team"></center> 
                <div class="card-body">
                    <h5 class="fw-bold">Purshottam Yadav</h5>
                    <p class="text-muted small">Founder & CEO</p>
                </div>
            </div>
        </div>


    </div>
</div>

<!-- Call to Action -->
<div class="container-fluid bg-dark text-white py-5 text-center">
    <h2 class="fw-bold">Start Shopping with NEPCART Today!</h2>
    <p class="mb-4">Discover amazing products at the best prices.</p>
    <a href="#" class="btn btn-primary px-4 py-2">Shop Now</a>
</div>

@endsection