@extends('layout.master')

@section('container')

<!-- Hero Section -->
<div class="container-fluid bg-primary text-white py-5 mb-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Our Products</h1>
        <p class="lead">Explore our latest items</p>
    </div>
</div>

<!-- Product Section -->
<div class="container py-5">
    <div class="row g-4">

        <!-- Product Card -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow product-card">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/product-1.jpg') }}" 
                         class="card-img-top" 
                         style="height:220px; object-fit:cover;">
                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">Sale</span>
                </div>

                <div class="card-body text-center">
                    <h6 class="fw-bold">Laptop Pro X</h6>
                    <p class="text-muted small">High performance laptop</p>

                    <div class="mb-2">
                        <span class="text-primary fw-bold">Rs. 85,000</span>
                        <small class="text-muted text-decoration-line-through">Rs. 95,000</small>
                    </div>

                    <a href="#" class="btn btn-primary btn-sm w-100">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product Card -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow product-card">
                <img src="{{ asset('assets/frontend/img/product-2.jpg') }}" 
                     class="card-img-top" 
                     style="height:220px; object-fit:cover;">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Smartphone X</h6>
                    <p class="text-muted small">Latest Android phone</p>
                    <div class="mb-2">
                        <span class="text-primary fw-bold">Rs. 45,000</span>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm w-100">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product Card -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow product-card">
                <img src="{{ asset('assets/frontend/img/product-3.jpg') }}" 
                     class="card-img-top" 
                     style="height:220px; object-fit:cover;">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Smart Watch</h6>
                    <p class="text-muted small">Fitness tracking watch</p>
                    <div class="mb-2">
                        <span class="text-primary fw-bold">Rs. 8,000</span>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm w-100">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product Card -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow product-card">
                <img src="{{ asset('assets/frontend/img/product-4.jpg') }}" 
                     class="card-img-top" 
                     style="height:220px; object-fit:cover;">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Headphones</h6>
                    <p class="text-muted small">Noise cancelling</p>
                    <div class="mb-2">
                        <span class="text-primary fw-bold">Rs. 3,500</span>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm w-100">Add to Cart</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Pagination -->
<div class="container">
    <nav>
        <ul class="pagination" style="display: flex; gap:0;">
            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>

<!-- Custom Style -->
<style>
.product-card {
    transition: all 0.3s ease;
    border-radius: 15px;
}
.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.2);
}
</style>

@endsection