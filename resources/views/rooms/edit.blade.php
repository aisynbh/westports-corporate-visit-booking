@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">

            <h4>Edit Room</h4>

        </div>

        <div class="card-body">

            <form action="{{ route('rooms.update', $room->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">Room Name</label>

                    <input
                        type="text"
                        name="room_name"
                        class="form-control"
                        value="{{ $room->room_name }}"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Level</label>

                    <input
                        type="text"
                        name="level"
                        class="form-control"
                        value="{{ $room->level }}"
                        required>

                </div>

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="{{ route('rooms.index') }}" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

@endsection