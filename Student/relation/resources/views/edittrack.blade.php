
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Edit Track</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Edit Track</h2>
        <form action="{{ route('tracks.update', $track->id) }}" method="POST">
    @csrf
    @method('PUT')

            <div class="form-group">
                <label for="name">Track Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $track->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Track Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $track->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Track</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>