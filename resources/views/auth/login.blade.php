<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Westports Corporate Visit Booking System</title>

    <link rel="icon" type="image/png" href="{{ asset('westports-logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{

            margin:0;
            height:100vh;

            background:
            linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
            url('{{ asset('westports-bg.jpg') }}');

            background-size:cover;
            background-position:center;

            display:flex;
            justify-content:center;
            align-items:center;

            font-family:Arial, Helvetica, sans-serif;

        }

        .login-card{

            width:520px;
            background:white;
            border-radius:20px;
            padding:40px;
            box-shadow:0 15px 40px rgba(0,0,0,.3);

        }

        .logo{

            width:180px;
            display:block;
            margin:auto;
            margin-bottom:20px;

        }

        .form-control{

            height:50px;
            border-radius:10px;

        }

        .btn-login{

            width:100%;
            height:50px;
            border-radius:10px;
            font-weight:bold;
            background:#0d6efd;
            color:white;

        }

    </style>

</head>

<body>

<div class="login-card">

    <img src="{{ asset('westports-logo.png') }}" class="logo">

    <h2 class="text-center fw-bold">

        Westports Corporate Visit Booking System

    </h2>

    <p class="text-center text-muted mb-4">

        Internal Staff Login

    </p>

    @if(session('status'))

        <div class="alert alert-success">

            {{ session('status') }}

        </div>

    @endif

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="mb-3">

            <label class="form-label">

                Email

            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control"
                required
                autofocus>

            @error('email')

                <small class="text-danger">

                    {{ $message }}

                </small>

            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">

                Password

            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                required>

            @error('password')

                <small class="text-danger">

                    {{ $message }}

                </small>

            @enderror

        </div>

       <div class="d-flex align-items-center mb-4">

            <div class="form-check">

                <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    id="remember">

                <label class="form-check-label" for="remember">

                    Remember Me

                </label>

            </div>

        </div>

        <button class="btn btn-login">

            LOG IN

        </button>

    </form>

</div>

</body>

</html>