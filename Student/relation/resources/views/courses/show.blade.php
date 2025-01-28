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