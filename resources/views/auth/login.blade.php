<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f172a;
        }

        .login-box {
            max-width: 400px;
            margin: 100px auto;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="text-center mb-4">Admin Login</h3>

                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter username">
                        <span class="text-warning">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                        <span class="text-warning">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>