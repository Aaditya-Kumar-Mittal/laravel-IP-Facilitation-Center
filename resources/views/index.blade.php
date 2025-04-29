<!DOCTYPE html>
<html>
<head>
    <title>Intellectual Property Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Your Intellectual Property Records</h2>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('iprs.create') }}" class="btn btn-success">+ Add New Record</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger">Logout</button>
        </form>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($iprs->count())
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Application Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($iprs as $ipr)
                        <tr>
                            <td>{{ $ipr->title }}</td>
                            <td>{{ $ipr->type }}</td>
                            <td>{{ \Carbon\Carbon::parse($ipr->application_date)->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('iprs.edit', $ipr->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ route('iprs.destroy', $ipr->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this record?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info text-center">You have no IPR records yet.</div>
    @endif
</div>
</body>
</html>
