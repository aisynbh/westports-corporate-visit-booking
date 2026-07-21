@extends('layouts.app')

@section('content')

<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">
        Westports Corporate Visit Booking
    </h2>

    <div>

        <a href="{{ route('export.pdf') }}"
           class="btn btn-danger me-2">

            <i class="bi bi-file-earmark-pdf-fill"></i>
            Export PDF

        </a>

        <a href="{{ route('bookings.create') }}"
           class="btn btn-success">

            <i class="bi bi-plus-circle"></i>
            New Booking

        </a>

    </div>

</div>

<div class="row mb-4">

    <div class="col-md-4">

        <div class="card text-white bg-primary shadow">

            <div class="card-body py-4">

                <h6 class="card-title">
                    <i class="bi bi-journal-bookmark-fill"></i>
                    Total Bookings
                </h6>

                <h2>{{ $totalBookings }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-white bg-success shadow">

            <div class="card-body py-4">

                <h6 class="card-title">
                    <i class="bi bi-calendar-event-fill"></i>
                    Today's Visits
                </h6>

                <h2>{{ $todaysVisits }}</h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-white bg-warning shadow">

            <div class="card-body py-4">

                <h6 class="card-title">
                    <i class="bi bi-building-fill"></i>
                    Departments
                </h6>

                <h2>{{ $totalDepartments }}</h2>

            </div>

        </div>

    </div>

</div>

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">

    <i class="bi bi-check-circle-fill"></i>

    {{ session('success') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"></button>

</div>

@endif

<div class="card shadow-sm mb-4">

    <div class="card-body py-4">

        <form method="GET" action="{{ route('bookings.index') }}">

            <div class="row align-items-end">

                <div class="col-md-10">

                    <label class="form-label fw-bold">
                        <i class="bi bi-search"></i>
                        Search Organization
                    </label>

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Enter organization name..."
                        value="{{ request('search') }}">

                </div>

                <div class="col-md-2">

                    <button class="btn btn-primary w-100">
                        Search
                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<div class="card shadow">

    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">

        <h5 class="mb-0">

            <i class="bi bi-table"></i>

            Corporate Visit Bookings

        </h5>

        <span class="badge bg-light text-dark">

            {{ $bookings->count() }} Booking(s)

        </span>

    </div>

    <div class="card-body p-0">

        <table class="table table-bordered table-hover mb-0">

            <thead class="table-dark">

                <tr>

                    <th>ID</th>
                    <th>Organization</th>
                    <th>Visit Date</th>
                    <th>Room</th>
                    <th>Department</th>
                    <th>Staff</th>
                    <th width="250">Action</th>

                </tr>

            </thead>

            <tbody>

            @forelse($bookings as $booking)

                <tr>

                    <td>{{ $booking->id }}</td>

                    <td>{{ $booking->organization_name }}</td>

                    <td>{{ \Carbon\Carbon::parse($booking->date)->format('d M Y') }}</td>

                    <td>{{ $booking->room->room_name }}</td>

                    <td>{{ $booking->department->name }}</td>

                    <td>{{ $booking->user->name }}</td>

                    <td class="text-nowrap">

                        <a href="{{ route('bookings.show', $booking->id) }}"
                           class="btn btn-outline-info btn-sm">

                            <i class="bi bi-eye"></i> View

                        </a>

                        <a href="{{ route('bookings.edit', $booking->id) }}"
                           class="btn btn-outline-warning btn-sm">

                            <i class="bi bi-pencil-square"></i> Edit

                        </a>

                        <form action="{{ route('bookings.destroy', $booking->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-outline-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this booking?')">

                                <i class="bi bi-trash"></i> Delete

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center py-5">

                        <i class="bi bi-search fs-1 text-secondary"></i>

                        <h5 class="mt-3">
                            No bookings found
                        </h5>

                        <p class="text-muted">
                            Try another organization name or clear the search.
                        </p>

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

@endsection