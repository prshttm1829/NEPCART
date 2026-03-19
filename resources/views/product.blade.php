@extends('layout.master')

@section('container')

<!-- Hero Section -->
<div class="container-fluid bg-primary text-white py-5 mb-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Our Products</h1>
        <p class="lead">Explore Our Latest Items</p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">

        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow product-card">
                <div class="position-relative">
                    <img src="{{ $product->image }}"
                        class="card-img-top"
                        style="height:220px; object-fit:cover;">
                    <span class="badge bg-danger position-absolute top-0 start-0 m-2">Sale</span>
                </div>

                <div class="card-body text-center">
                    <h6 class="fw-bold">{{ $product->name }}</h6>
                    <p class="text-muted small">{{ $product->productCategory->category_name }}</p>

                    <div class="mb-2">
                        <span class="text-primary fw-bold">Rs. {{ $product->net_amount }}</span>
                        <small class="text-muted text-decoration-line-through">Rs. {{ $product->price }}</small>
                    </div>

                    <a href="{{route('productDetail',$product->slug)}}" class="btn btn-primary btn-sm w-100">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $products->links() }}
</div>


<!-- Custom Style -->
<style>
    .product-card {
        transition: all 0.3s ease;
        border-radius: 15px;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    ul.pagination {
        display: flex !important;
        flex-wrap: wrap;
        list-style: none;
        padding-left: 0;
    }

    ul.pagination li {
        margin: 0 5px;
    }
</style>

@endsection