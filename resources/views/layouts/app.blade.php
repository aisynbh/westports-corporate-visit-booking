<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Westports Corporate Visit Booking System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="{{ asset('westports-logo.png') }}">

    <style>

        .navbar .nav-link.active{
            background-color:#198754;
            border-radius:6px;
            color:white !important;
            font-weight:600;
        }

        .navbar .nav-link{
            margin-left:8px;
            border-radius:6px;
            transition:.2s;
        }

        .navbar .nav-link:hover{
            background:rgba(255,255,255,.15);
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow py-2">

    <div class="container d-flex align-items-center">

<a class="navbar-brand p-0" href="{{ route('bookings.index') }}">
    <img src="{{ asset('westports-logo.png') }}"
         alt="Westports Logo"
         style="height:40px; width:auto;">
</a>

        <div class="navbar-nav ms-auto gap-2">

            <a class="nav-link {{ request()->routeIs('bookings.*') ? 'active' : '' }}"
               href="{{ route('bookings.index') }}">

                Dashboard

            </a>

            <a class="nav-link {{ request()->routeIs('departments.*') ? 'active' : '' }}"
               href="{{ route('departments.index') }}">

                Departments

            </a>

            <a class="nav-link {{ request()->routeIs('rooms.*') ? 'active' : '' }}"
               href="{{ route('rooms.index') }}">

                Rooms

            </a>

            <form action="{{ route('logout') }}" method="POST" class="d-inline">

                @csrf

                <button
                    type="submit"
                    class="btn btn-link nav-link border-0 text-white">

                    Logout

                </button>

            </form>

        </div>

    </div>

</nav>

<div class="container mt-4">

    @yield('content')

</div>

<footer class="text-center mt-5 mb-3 text-muted">

    &copy; {{ date('Y') }} Westports Corporate Visit Booking System

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>