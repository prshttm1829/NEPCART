<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
        }

        .register-wrapper {
            margin-top: 40px;
            margin-bottom: 60px;
        }

        .card {
            border-radius: 20px;
        }

        .form-control,
        .form-select {
            border-radius: 10px;
        }

        .btn-primary {
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container register-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow-lg border-0">
                    <div class="card-body p-3">

                        <h2 class="text-center mb-4 fw-bold">Customer Registration</h2>

                        <form method="POST" action="{{route('customerRegister')}}" enctype="multipart/form-data">
                            @csrf
                            <!-- Full Name -->
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter full name">
                                <span class="text-warning">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email">
                                <span class="text-warning">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" placeholder="Enter phone number">
                                <span class="text-warning">
                                    @error('phone_number')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <!-- Location -->
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control" placeholder="Enter your location">
                                <span class="text-warning">
                                    @error('location')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <!-- Gender -->
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <span class="text-warning">
                                    @error('gender')
                                    {{$message}}
                                    @enderror
                                </span>

                            </div>

                            <!-- Date of Birth -->
                            <div class="mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control">
                                <span class="text-warning">
                                    @error('dob')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Profile Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <span class="text-warning">
                                    @error('image')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Create password">
                                <i class="fa fa-eye position-absolute"
                                    style="top: 38px; right: 10px; cursor: pointer;"
                                    onclick="togglePassword('password', this)"></i>
                                <small class="text-muted">
                                    Must be at least 7 characters and include uppercase, lowercase, special character and a number.
                                </small>
                                <span class="text-warning">
                                    @error('password') {{$message}} @enderror
                                </span>
                            </div>
                            <div class="mb-4 position-relative">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" id="confirm_password" class="form-control" placeholder="Confirm password" required>
                                <i class="fa fa-eye position-absolute"
                                    style="top: 38px; right: 10px; cursor: pointer;"
                                    onclick="togglePassword('confirm_password', this)"></i>
                                <span class="text-warning">
                                    @error('Confirm password') {{$message}} @enderror
                                </span>
                            </div>
                            <div class="mt-4 d-flex gap-3">
                                <button type="submit" class="btn btn-primary">
                                    Register Now
                                </button>
                                <a class="btn btn-danger" href="{{route('welcome')}}" type="submit" class="btn btn-primary">
                                    Cancel
                                </a>
                            </div>
                            <div class="text-center mt-4">
                                Already have an account?
                                <a href="{{route('customerLogin')}}" class="text-decoration-none fw-semibold">
                                    Login here
                                </a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword(fieldId, icon) {
            const input = document.getElementById(fieldId);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>