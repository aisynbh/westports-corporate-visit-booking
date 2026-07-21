@extends('layouts.app')

@section('content')

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-dark text-white">

<h4>Add Department</h4>

</div>

<div class="card-body">

<form action="{{ route('departments.store') }}" method="POST">

@csrf

<div class="mb-3">

<label>Name</label>

<input
type="text"
name="name"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
class="form-control"
rows="3"></textarea>

</div>

<button class="btn btn-success">

Save

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