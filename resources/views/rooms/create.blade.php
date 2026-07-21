@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">

            <h4>Add Room</h4>

        </div>

        <div class="card-body">

            <form action="{{ route('rooms.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">Room Name</label>

                    <input
                        type="text"
                        name="room_name"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Level</label>

                    <input
                        type="text"
                        name="level"
                        class="form-control"
                        required>

                </div>

                <button type="submit" class="btn btn-success">
                    Save
                </button>

                <a href="{{ route('rooms.index') }}" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

@endsection