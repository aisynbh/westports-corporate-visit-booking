@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold">Room Management</h2>

        <a href="{{ route('rooms.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i>
            New Room
        </a>

    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle-fill"></i>
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow">

        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">

            <h5 class="mb-0">
                <i class="bi bi-door-open-fill"></i>
                Rooms
            </h5>

            <span class="badge bg-light text-dark">
                {{ $rooms->count() }} Room(s)
            </span>

        </div>

        <div class="card-body p-0">

            <table class="table table-bordered table-hover mb-0">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Room Name</th>
                        <th>Level</th>
                        <th width="220">Action</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($rooms as $room)

                    <tr>

                        <td>{{ $room->id }}</td>
                        <td>{{ $room->room_name }}</td>
                        <td>{{ $room->level }}</td>

                        <td>

                            <a href="{{ route('rooms.edit', $room->id) }}"
                               class="btn btn-outline-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <form action="{{ route('rooms.destroy', $room->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this room?')">

                                    <i class="bi bi-trash"></i> Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="text-center py-5">

                            No rooms found.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection