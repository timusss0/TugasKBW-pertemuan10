<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Biodata</h1>

    <form action="{{ route('biodatas.update', $biodata->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $biodata->first_name }}" required>
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $biodata->last_name }}" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="male" {{ $biodata->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $biodata->gender == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('biodatas.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
