<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Westports Corporate Visit Booking Report</title>

    <style>

        body{
            font-family: DejaVu Sans, sans-serif;
            font-size:12px;
        }

        h2{
            text-align:center;
            margin-bottom:5px;
        }

        p{
            text-align:center;
            margin-top:0;
            margin-bottom:20px;
            color:#666;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th,td{
            border:1px solid #000;
            padding:8px;
            text-align:left;
        }

        th{
            background:#eeeeee;
        }

    </style>

</head>

<body>

<h2>Westports Corporate Visit Booking Report</h2>

<p>
    Generated on:
    {{ now()->format('d F Y, h:i A') }}
</p>

<table>

    <thead>

        <tr>

            <th>ID</th>
            <th>Organization</th>
            <th>Visit Date</th>
            <th>Arrival</th>
            <th>End</th>
            <th>Room</th>
            <th>Department</th>
            <th>Staff</th>

        </tr>

    </thead>

    <tbody>

    @foreach($bookings as $booking)

        <tr>

            <td>{{ $booking->id }}</td>

            <td>{{ $booking->organization_name }}</td>

            <td>{{ \Carbon\Carbon::parse($booking->date)->format('d M Y') }}</td>

            <td>{{ \Carbon\Carbon::parse($booking->arrival_time)->format('h:i A') }}</td>

            <td>{{ \Carbon\Carbon::parse($booking->end_time)->format('h:i A') }}</td>

            <td>{{ $booking->room->room_name }}</td>

            <td>{{ $booking->department->name }}</td>

            <td>{{ $booking->user->name }}</td>

        </tr>

    @endforeach

    </tbody>

</table>

</body>

</html>