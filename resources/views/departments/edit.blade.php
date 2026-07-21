@extends('layouts.app')

@section('content')

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-dark text-white">

<h4>Edit Department</h4>

</div>

<div class="card-body">

<form action="{{ route('departments.update',$department->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Name</label>

<input
type="text"
name="name"
class="form-control"
value="{{ $department->name }}"
required>

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
class="form-control"
rows="3">{{ $department->description }}</textarea>

</div>

<button class="btn btn-warning">

Update

</button>

<a href="{{ route('departments.index') }}"
class="btn btn-secondary">

Back

</a>

</form>

</div>

</div>

</div>

@endsection