<x-button-component />
 @extends('components\layout.app')

@section('title', 'Create Student')

@section('content')
<h1 class="text-success mx-5 my-3">Create New Course</h1>

    <form method="POST" action="{{ route('courses.store') }}" class="w-75 border m-auto p-3" enctype="multipart/form-data">
        @csrf

        {{-- name --}}
        <div class="mb-3">
            <label for="course Name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="course Name" required>
        </div>

        {{-- image --}}
        <div class="mb-3">
            <label for="course Image" class="form-label">Image</label>
            <input name="logo" type="file" class="form-control" id="course Image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection