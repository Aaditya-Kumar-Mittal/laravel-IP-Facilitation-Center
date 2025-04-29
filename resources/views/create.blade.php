<!DOCTYPE html>
<html>
<head>
    <title>Add New Intellectual Property</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Add New Intellectual Property Record</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Please fix the following errors:
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('iprs.store') }}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4" placeholder="Enter description" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" value="{{ old('type') }}" class="form-control" placeholder="Patent, Trademark, etc." required>
        </div>

        <div class="mb-4">
            <label for="application_date" class="form-label">Application Date</label>
            <input type="date" name="application_date" value="{{ old('application_date') }}" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('iprs.index') }}" class="btn btn-secondary">← Back</a>
            <button type="submit" class="btn btn-success">Add Record</button>
        </div>
    </form>
</div>
</body>
</html>
