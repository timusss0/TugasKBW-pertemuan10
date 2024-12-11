<!-- resources/views/biodatas/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Biodata List</h1>

    <a href="{{ route('biodatas.create') }}" class="btn btn-primary mb-3">Add New Biodata</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($biodatas as $index => $biodata)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $biodata->first_name }}</td>
                <td>{{ $biodata->last_name }}</td>
                <td>{{ $biodata->gender }}</td>
                <td>
                    <a href="{{ route('biodatas.edit', $biodata->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('biodatas.destroy', $biodata->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
