

@extends('components\layout.app')

@section('title', 'All Courses')

@section('content')
<x-button-component />
<div class="m-2 d-flex justify-content-around">
    <h1 class="text-info">All Courses Data</h1>
    <!-- <a href="{{ route('courses.create') }}"><button class="btn btn-info">Create Course</button></a> -->
</div>

<table class="table table-bordered w-75 m-auto">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Logo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
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
                <a href="{{ route('courses.show', $course) }}"><button class="btn btn-warning">View</button></a>
                <form action="{{ route('courses.destroy', $course) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('courses.edit', $course->id) }}"><button class="btn btn-success">Update</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center" style="margin:10px;">
    {{ $courses->links() }}
</div>
@endsection