@extends('layout.master')

@section('container')


    <style>
        

        .sidebar {
            background-color: #ffffff;
            border-right: 2px solid #dee2e6;
            min-height: 100vh;
        }

        .sidebar a {
            display: block;
            padding: 12px 15px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .sidebar a:hover {
            background-color: #e9ecef;
        }

        .sidebar a.active {
            background-color: #0d6efd;
            color: #fff;
        }

        .content-area {
            padding: 30px;
        }

        .welcome-box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
    </style>


<div class="container-fluid dashboard-container">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar p-3">

            <h5 class="fw-bold mb-4">Customer Panel</h5>

            <a href="#" class="active">Dashboard</a>
            <a href="#">Product</a>
            <a href="#">Wishlist</a>
            <a href="#">Profile</a>
            <a href="#">Favourite</a>
            <a href="#">Shipping</a>

        </div>

        <!-- Content Area -->
        <div class="col-md-9 col-lg-10 content-area">

            <div class="welcome-box">
                <h3 class="fw-bold">Welcome to the dashboard.</h3>
                <p class="text-muted">
                    This is your customer dashboard. You can manage your profile, wishlist,
                    favourite products, and shipping details from here.
                </p>
            </div>

        </div>

    </div>
</div>

@endsection