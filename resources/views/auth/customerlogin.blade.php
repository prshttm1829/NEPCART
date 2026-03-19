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

                        <h2 class="text-center mb-4 fw-bold text-decoration-underline">Customer login</h2>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                      

                        <form method="POST" action="{{route('customerLogin')}}" enctype="multipart/form-data">
                            @csrf
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
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Create password">
                                <span class="text-warning">
                                    @error('password')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <!-- Register Button -->
                            <div class="d-flex mt-4 gap-3">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                 <a class="btn btn-danger" href="{{route('welcome')}}" type="submit" class="btn btn-primary">
                                    Cancel
                                </a>
                            </div>

                            <!-- Login Link -->
                            <div class="text-center mt-4">
                                Create a new account
                                <a href="{{route('customerRegister')}}" class="text-decoration-none fw-semibold">
                                    Register here
                                </a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>