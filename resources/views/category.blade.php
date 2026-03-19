@extends('layout.master')

@section('container')

<!-- Hero Section -->
<div class="container-fluid bg-primary text-white py-5 mb-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Shop by Categories</h1>
        <p class="lead">Explore products by category</p>
    </div>
</div>

<!-- Category Section -->
<div class="container py-5">
    <div class="row g-4">
@foreach($categories as $productCategory)
        <!-- productCategory Item -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card border-0 shadow category-card text-center p-3">
                <img src="{{ $productCategory->image}}" 
                     class="mx-auto mb-3 rounded-circle" 
                     style="width:120px; height:120px; object-fit:cover;">
                <h5 class="fw-bold">{{$productCategory->name}}</h5>
                <p class="text-muted small">{{$productCategory->brand_name}}</p>
                <a href="{{route('category.product',$productCategory->slug)}}" class="btn btn-outline-primary btn-sm">See Product</a>
            </div>
        </div>
@endforeach

        

    </div>
</div>

<!-- Extra Style -->
<style>
.category-card {
    transition: all 0.3s ease;
    border-radius: 15px;
}
.category-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}
</style>

@endsection