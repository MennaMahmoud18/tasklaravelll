<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<x-button-component />
    <h1 class="text-success mx-5 my-3">Update Student Data</h1>

    <form method="POST" action="{{ route('courses.update', $course->id) }}" class="w-75 border m-auto p-3" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- name --}}
        <div class="mb-3">
            <label for="course Name" class="form-label">Name address</label>
            <input name="name" type="text" class="form-control" id="course Name" value="{{ $course->name }}">
        </div>

        {{-- image --}}
        <div class="mb-3">
            <label for="course Image" class="form-label">Logo</label>
            <input name="logo" type="file" class="form-control" id="course Image">
            @if($course->logo)
                <img src="{{ asset('storage/' . $course->logo) }}" alt="Course Logo" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>  
 -->
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