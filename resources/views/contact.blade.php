@extends('layout.master')

@section('container')

<!-- Hero Section -->
<div class="container-fluid bg-primary text-white py-5 mb-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p class="lead">We’d love to hear from you!</p>
    </div>
</div>

<!-- Contact Section -->
<div class="container py-5">
    <div class="row g-5">

        <!-- Contact Form -->
        <div class="col-lg-7">
            <div class="p-4 shadow rounded bg-light">
                <h3 class="fw-bold mb-4">Send Message</h3>

                <form action="#" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <div class="col-12">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>

                        <div class="col-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-4 py-2">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-5">
            <div class="p-4 shadow rounded h-100 bg-white">

                <h3 class="fw-bold mb-4">Get in Touch</h3>

                <p class="text-muted">
                    Have questions about products, orders, or anything else? Our team is ready to help you.
                </p>

                <div class="mb-3">
                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                    <strong>Location:</strong> {{officeSetting()?->address}}
                </div>

                <div class="mb-3">
                    <i class="fa fa-phone text-primary me-2"></i>
                    <strong>Phone:</strong> +977-{{officeSetting()?->phone}}
                </div>

                <div class="mb-3">
                    <i class="fa fa-envelope text-primary me-2"></i>
                    <strong>Email:</strong> {{officeSetting()?->email}}
                </div>

                <div class="mb-3">
                    <i class="fa fa-clock text-primary me-2"></i>
                    <strong>Working Hours:</strong> 9:00 AM - 6:00 PM
                </div>

                <!-- Social Links -->
                <div class="mt-4">
                    <a href="{{officeSetting()?->facebook_url}}" class="btn btn-outline-primary btn-sm me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{officeSetting()?->tiktok_url}}" class="btn btn-outline-primary btn-sm me-2"><i class="fab fa-twitter"></i></a>
                    <a href="{{officeSetting()?->instagram_url}}" class="btn btn-outline-primary btn-sm me-2"><i class="fab fa-instagram"></i></a>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Map Section -->
<div class="container-fluid mt-5">
    <iframe 
        src="{{officeSetting()?->website_url}}"
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

@endsection