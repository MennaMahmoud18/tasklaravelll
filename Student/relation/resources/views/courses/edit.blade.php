@extends('components\layout.app')

@section('title', 'Edit Student')

@section('content')
<h1 class="text-success mx-5 my-3">Update Student Data</h1>

<form method="POST" action="{{ route('courses.update', $course->id) }}" class="w-75 border m-auto p-3" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- name -->
    <div class="mb-3">
        <label for="course Name" class="form-label">Name address</label>
        <input name="name" type="text" class="form-control" id="course Name" value="{{ $course->name }}">
    </div>

    <!-- image -->
    <div class="mb-3">
        <label for="course Image" class="form-label">Logo</label>
        <input name="logo" type="file" class="form-control" id="course Image">
        @if($course->logo)
            <img src="{{ asset('storage/' . $course->logo) }}" alt="Course Logo" width="100" class="mt-2">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection