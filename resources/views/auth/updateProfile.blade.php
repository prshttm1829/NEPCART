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
            background: #f4f6f9;
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
            <div class="card-body" style="background-color: aqua;">
                <u>
                    <h3 class="text-center text-light mb-4">Profile Update</h3>
                </u>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('admin.updateProfile',$user)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{old('name',$user->name)}}" class="form-control">
                        <span class="text-warning">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{old('email',$user->email)}}" class="form-control">
                        <span class="text-warning">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Update Profile
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>