@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h3>Booking Details</h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="35%">Organization</th>
                    <td>{{ $booking->organization_name }}</td>
                </tr>

                <tr>
                    <th>Visit Date</th>
                    <td>{{ $booking->date }}</td>
                </tr>

                <tr>
                    <th>Arrival Time</th>
                    <td>{{ \Carbon\Carbon::parse($booking->arrival_time)->format('h:i A') }}</td>
                </tr>

                <tr>
                    <th>End Time</th>
                    <td>{{ \Carbon\Carbon::parse($booking->end_time)->format('h:i A') }}</td>
                </tr>

                <tr>
                    <th>Port Tour Time</th>
                    <td>{{ \Carbon\Carbon::parse($booking->port_tour_time)->format('h:i A') }}</td>
                </tr>

                <tr>
                    <th>Escort Booking Time</th>
                    <td>{{ \Carbon\Carbon::parse($booking->escort_booking_time)->format('h:i A') }}</td>
                </tr>

                <tr>
                    <th>Safety Briefing Venue</th>
                    <td>{{ $booking->safety_briefing_venue }}</td>
                </tr>

                <tr>
                    <th>Safety Briefing Time</th>
                    <td>{{ \Carbon\Carbon::parse($booking->safety_briefing_time)->format('h:i A') }}</td>
                </tr>

                <tr>
                    <th>Safety Briefing Language</th>
                    <td>{{ $booking->safety_briefing_language }}</td>
                </tr>

                <tr>
                    <th>Welcome Signage</th>
                    <td>
                        {{ $booking->signage ? 'Yes' : 'No' }}
                    </td>
                </tr>

                <tr>
                    <th>Souvenir</th>
                    <td>
                        {{ $booking->souvenir ? 'Yes' : 'No' }}
                    </td>
                </tr>

                <tr>
                    <th>Department</th>
                    <td>{{ $booking->department->name }}</td>
                </tr>

                <tr>
                    <th>Room</th>
                    <td>{{ $booking->room->room_name }}</td>
                </tr>

                <tr>
                    <th>Staff</th>
                    <td>{{ $booking->user->name }}</td>
                </tr>

            </table>

            <a href="{{ route('bookings.index') }}" class="btn btn-secondary">
                Back to Booking List
            </a>

        </div>

    </div>

</div>

@endsection