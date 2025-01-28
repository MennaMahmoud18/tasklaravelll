 <!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Courses Data</title>
</head>

<body>
<x-button-component />
    

    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Desctiption</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>
                            @if ($course->logo)
                                <img src="{{ asset('storage/' . $course->logo) }}" alt="Course Logo" width="100">
                            @else
                                No Logo
                            @endif
                </td>
                <td>
                    <a href={{ route('courses.index') }}><button class="btn btn-Info">Back</button></a>
                </td>
            </tr>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>  -->


@extends('components\layout.app')

@section('title', 'Course Details')

@section('content')

<x-button-component />
<table class="table table-bordered w-75 m-auto">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->description }}</td>
            <td>
                <img class="w-100" src="{{ asset('storage/' . $course->logo) }}" alt="Course Logo">
            </td>
            <td>
                <a href="{{ route('courses.index') }}"><button class="btn btn-info">Back</button></a>
            </td>
        </tr>
    </tbody>
</table>
@endsection