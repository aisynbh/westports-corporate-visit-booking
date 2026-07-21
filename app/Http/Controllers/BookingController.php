<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\Department;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BookingController extends Controller
{
    /**
     * Display all bookings.
     */
    public function index(Request $request)
    {
        $query = Booking::with(['room', 'department', 'user']);

        if ($request->filled('search')) {
            $query->where('organization_name', 'like', '%' . $request->search . '%');
        }

        $bookings = $query->get();

        $totalBookings = Booking::count();
        $todaysVisits = Booking::whereDate('date', today())->count();
        $totalDepartments = Department::count();

        return view('bookings.index', compact(
            'bookings',
            'totalBookings',
            'todaysVisits',
            'totalDepartments'
        ));
    }

    /**
     * Export bookings to PDF.
     */
    public function exportPdf()
    {
        $bookings = Booking::with(['room', 'department', 'user'])->get();

        $pdf = Pdf::loadView('bookings.pdf', compact('bookings'));

        return $pdf->download('Corporate_Visit_Bookings.pdf');
    }

    /**
     * Show the booking creation form.
     */
    public function create()
    {
        $rooms = Room::all();
        $departments = Department::all();

        return view('bookings.create', compact('rooms', 'departments'));
    }

    /**
     * Store a new booking.
     */
    public function store(Request $request)
    {
        $request->validate([
            'organization_name' => 'required',
            'date' => 'required|date',
            'arrival_time' => 'required',
            'end_time' => 'required',
            'port_tour_time' => 'required',
            'escort_booking_time' => 'required',
            'safety_briefing_venue' => 'required',
            'safety_briefing_time' => 'required',
            'safety_briefing_language' => 'required',
            'room_id' => 'required',
            'department_id' => 'required',
        ]);

        Booking::create([
            'organization_name' => $request->organization_name,
            'date' => $request->date,
            'arrival_time' => $request->arrival_time,
            'end_time' => $request->end_time,
            'port_tour_time' => $request->port_tour_time,
            'escort_booking_time' => $request->escort_booking_time,
            'safety_briefing_venue' => $request->safety_briefing_venue,
            'safety_briefing_time' => $request->safety_briefing_time,
            'safety_briefing_language' => $request->safety_briefing_language,
            'signage' => $request->has('signage'),
            'souvenir' => $request->has('souvenir'),
            'room_id' => $request->room_id,
            'department_id' => $request->department_id,
            'user_id' => 1,
        ]);

        return redirect()->route('bookings.index')
                         ->with('success', 'Booking created successfully!');
    }

    /**
     * Display a specific booking.
     */
    public function show(string $id)
    {
        $booking = Booking::with([
            'room',
            'department',
            'user'
        ])->findOrFail($id);

        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the edit form.
     */
    public function edit(string $id)
    {
        $booking = Booking::findOrFail($id);

        $rooms = Room::all();
        $departments = Department::all();

        return view('bookings.edit', compact(
            'booking',
            'rooms',
            'departments'
        ));
    }

    /**
     * Update the booking.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'organization_name' => 'required',
            'date' => 'required|date',
            'arrival_time' => 'required',
            'end_time' => 'required',
            'port_tour_time' => 'required',
            'escort_booking_time' => 'required',
            'safety_briefing_venue' => 'required',
            'safety_briefing_time' => 'required',
            'safety_briefing_language' => 'required',
            'room_id' => 'required',
            'department_id' => 'required',
        ]);

        $booking = Booking::findOrFail($id);

        $booking->update([
            'organization_name' => $request->organization_name,
            'date' => $request->date,
            'arrival_time' => $request->arrival_time,
            'end_time' => $request->end_time,
            'port_tour_time' => $request->port_tour_time,
            'escort_booking_time' => $request->escort_booking_time,
            'safety_briefing_venue' => $request->safety_briefing_venue,
            'safety_briefing_time' => $request->safety_briefing_time,
            'safety_briefing_language' => $request->safety_briefing_language,
            'signage' => $request->has('signage'),
            'souvenir' => $request->has('souvenir'),
            'room_id' => $request->room_id,
            'department_id' => $request->department_id,
        ]);

        return redirect()->route('bookings.index')
                         ->with('success', 'Booking updated successfully!');
    }

    /**
     * Delete the booking.
     */
    public function destroy(string $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->delete();

        return redirect()->route('bookings.index')
                         ->with('success', 'Booking deleted successfully!');
    }
}