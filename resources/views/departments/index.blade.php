@extends('layouts.app')

@section('content')

<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">
        Department Management
    </h2>

    <a href="{{ route('departments.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i>
        New Department
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

    <div class="card-header bg-dark text-white d-flex justify-content-between">

        <h5 class="mb-0">
            <i class="bi bi-building"></i>
            Departments
        </h5>

        <span class="badge bg-light text-dark">
            {{ $departments->count() }} Department(s)
        </span>

    </div>

    <div class="card-body p-0">

        <table class="table table-bordered table-hover mb-0">

            <thead class="table-dark">

                <tr>

                    <th>ID</th>

                    <th>Department Name</th>

                    <th>Description</th>

                    <th width="220">Action</th>

                </tr>

            </thead>

            <tbody>

            @forelse($departments as $department)

                <tr>

                    <td>{{ $department->id }}</td>

                    <td>{{ $department->name }}</td>

                    <td>{{ $department->description }}</td>

                    <td>

                        <a href="{{ route('departments.edit',$department->id) }}"
                           class="btn btn-outline-warning btn-sm">

                            <i class="bi bi-pencil-square"></i>
                            Edit

                        </a>

                        <form action="{{ route('departments.destroy',$department->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-outline-danger btn-sm"
                                onclick="return confirm('Delete this department?')">

                                <i class="bi bi-trash"></i>

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="4" class="text-center py-5">

                        No departments found.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</div>

@endsection