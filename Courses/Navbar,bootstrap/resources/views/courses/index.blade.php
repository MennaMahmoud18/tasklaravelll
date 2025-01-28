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
    {{-- @dump($courses) --}}
<div class="m-2 d-flex justify-content-around  ">
    <h1 class="text-info">
        All Courses Data
    </h1>
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

            @foreach ($courses as $course )

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



                <td><a href={{ route('courses.show', $course) }}><button class="btn btn-warning">View</button></a>
                   <form action="{{ route('courses.destroy', $course) }}" method="post">
                    @method('DELETE')
                    @csrf
                   <button
                        class="btn btn-danger">Delete</button>
                  </form>
                  <a href="{{route('courses.edit',$course->id)  }}">
                    <button class="btn btn-Success">Update</button>
                </a>    
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>

<div style="margin:10px;" class="d-flex justify-content-center">
    {{ $courses->links() }}

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html> 

 -->



 @extends('components\layout.app')

@section('title', 'All Courses')

@section('content')
<x-button-component />
<div class="m-2 d-flex justify-content-around">
    <h1 class="text-info">All Courses Data</h1>
    <a href="{{ route('courses.create') }}"><button class="btn btn-info">Create Course</button></a>
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