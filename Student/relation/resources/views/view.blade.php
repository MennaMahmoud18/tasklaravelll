<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Students  Data</title>
</head>

<body>
    {{-- @dump($student) --}}

    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Image</th>
                @if ($student->track)
                <th scope="col">Track</th>
                @endif
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->gender }}</td>
                <td><img src="{{ $student->image }}" alt="studentImage" srcset=""></td>
                
                @if ( $student->track_id )
                <td><a href="{{ route('tracks.view',$student->track_id) }}">{{ $student->track->name }}</a></td>
                @endif

                <td>
                     <!-- <a href={{ route('students.view', $student->id) }}><button class="btn btn-warning">View</button></a>  -->
                <a href={{ route('students.index') }}><button class="btn btn-Info">Back</button></a></td>
            </tr>



        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>