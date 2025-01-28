<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Track Data</title>
</head>

<body>

    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $track->id }}</td>
                <td>{{ $track->name }}</td>
                <td>{{ $track->description }}</td>
                <td>
                <a href={{ route('tracks.view', $track->id) }}><button class="btn btn-info">Back</button></a>


                </td>
            </tr>
        </tbody>
    </table>

    @if(count($track->students)>0)
<h1 class="text-success m-2">All Track Students</h1>
{{-- Track Students --}}
<table class="table table-bordered w-75 m-auto">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>

            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>


        @foreach ($track->students as $student )
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>

            <td>
                <a href={{ route('tracks.index') }}><button class="btn btn-Info">Back</button></a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endif



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>