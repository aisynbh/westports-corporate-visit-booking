@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h3>Westports Corporate Visit Booking</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('bookings.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Organization Name</label>
                    <input type="text" name="organization_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Visit Date</label>
                    <input type="date" name="date" class="form-control" required>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Arrival Time</label>
                        <input type="time" name="arrival_time" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>End Time</label>
                        <input type="time" name="end_time" class="form-control" required>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Port Tour Time</label>
                        <input type="time" name="port_tour_time" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Escort Booking Time</label>
                        <input type="time" name="escort_booking_time" class="form-control" required>
                    </div>

                </div>

                <div class="mb-3">
                    <label>Safety Briefing Venue</label>
                    <input type="text" name="safety_briefing_venue" class="form-control" required>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Safety Briefing Time</label>
                        <input type="time" name="safety_briefing_time" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Safety Briefing Language</label>

                        <select name="safety_briefing_language" class="form-select">

                            <option value="English">English</option>

                            <option value="Bahasa Malaysia">Bahasa Malaysia</option>

                            <option value="Mandarin">Mandarin</option>

                        </select>

                    </div>

                </div>

                <div class="form-check mb-2">

                    <input class="form-check-input"
                           type="checkbox"
                           name="signage"
                           value="1">

                    <label class="form-check-label">

                        Welcome Signage Required

                    </label>

                </div>

                <div class="form-check mb-4">

                    <input class="form-check-input"
                           type="checkbox"
                           name="souvenir"
                           value="1">

                    <label class="form-check-label">

                        Souvenir Required

                    </label>

                </div>

                <div class="mb-3">

                    <label>Department</label>

                    <select name="department_id" class="form-select">

                        @foreach($departments as $department)

                            <option value="{{ $department->id }}">

                                {{ $department->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-4">

                    <label>Room</label>

                    <select name="room_id" class="form-select">

                        @foreach($rooms as $room)

                            <option value="{{ $room->id }}">

                                {{ $room->room_name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <button type="submit" class="btn btn-primary">

                    Submit Booking

                </button>

                <a href="{{ route('bookings.index') }}"
                   class="btn btn-secondary">

                    Back

                </a>

            </form>

        </div>

    </div>

</div>

@endsection