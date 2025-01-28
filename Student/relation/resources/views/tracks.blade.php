
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracks List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tracks List</h2>
        <a href="{{ route('tracks.create') }}" class="btn btn-success mb-3">Create New Track</a>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Track Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tracks as $track)
                    <tr>
                        <td>{{ $track->id }}</td>
                        <td>{{ $track->name }}</td>
                        <td>{{ $track->description }}</td>
                        <td>
                            <a href="{{ route('tracks.view', $track->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('tracks.edit', $track->id) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('tracks.destroy', $track->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this track?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

