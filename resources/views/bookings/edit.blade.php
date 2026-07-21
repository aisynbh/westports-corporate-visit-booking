@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h3>Edit Corporate Visit Booking</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('bookings.update', $booking->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Organization Name</label>
                    <input type="text"
                           name="organization_name"
                           class="form-control"
                           value="{{ $booking->organization_name }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Visit Date</label>
                    <input type="date"
                           name="date"
                           class="form-control"
                           value="{{ $booking->date }}"
                           required>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Arrival Time</label>
                        <input type="time"
                               name="arrival_time"
                               class="form-control"
                               value="{{ $booking->arrival_time }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>End Time</label>
                        <input type="time"
                               name="end_time"
                               class="form-control"
                               value="{{ $booking->end_time }}"
                               required>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Port Tour Time</label>
                        <input type="time"
                               name="port_tour_time"
                               class="form-control"
                               value="{{ $booking->port_tour_time }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Escort Booking Time</label>
                        <input type="time"
                               name="escort_booking_time"
                               class="form-control"
                               value="{{ $booking->escort_booking_time }}"
                               required>
                    </div>

                </div>

                <div class="mb-3">
                    <label>Safety Briefing Venue</label>
                    <input type="text"
                           name="safety_briefing_venue"
                           class="form-control"
                           value="{{ $booking->safety_briefing_venue }}"
                           required>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Safety Briefing Time</label>
                        <input type="time"
                               name="safety_briefing_time"
                               class="form-control"
                               value="{{ $booking->safety_briefing_time }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">

                        <label>Safety Briefing Language</label>

                        <select name="safety_briefing_language" class="form-select">

                            <option value="English"
                                {{ $booking->safety_briefing_language == 'English' ? 'selected' : '' }}>
                                English
                            </option>

                            <option value="Bahasa Malaysia"
                                {{ $booking->safety_briefing_language == 'Bahasa Malaysia' ? 'selected' : '' }}>
                                Bahasa Malaysia
                            </option>

                            <option value="Mandarin"
                                {{ $booking->safety_briefing_language == 'Mandarin' ? 'selected' : '' }}>
                                Mandarin
                            </option>

                        </select>

                    </div>

                </div>

                <div class="form-check mb-2">

                    <input class="form-check-input"
                           type="checkbox"
                           name="signage"
                           value="1"
                           {{ $booking->signage ? 'checked' : '' }}>

                    <label class="form-check-label">
                        Welcome Signage Required
                    </label>

                </div>

                <div class="form-check mb-4">

                    <input class="form-check-input"
                           type="checkbox"
                           name="souvenir"
                           value="1"
                           {{ $booking->souvenir ? 'checked' : '' }}>

                    <label class="form-check-label">
                        Souvenir Required
                    </label>

                </div>

                <div class="mb-3">

                    <label>Department</label>

                    <select name="department_id" class="form-select">

                        @foreach($departments as $department)

                            <option value="{{ $department->id }}"
                                {{ $booking->department_id == $department->id ? 'selected' : '' }}>

                                {{ $department->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-4">

                    <label>Room</label>

                    <select name="room_id" class="form-select">

                        @foreach($rooms as $room)

                            <option value="{{ $room->id }}"
                                {{ $booking->room_id == $room->id ? 'selected' : '' }}>

                                {{ $room->room_name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <button type="submit" class="btn btn-warning">
                    Update Booking
                </button>

                <a href="{{ route('bookings.index') }}"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

@endsection