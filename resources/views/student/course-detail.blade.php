<!DOCTYPE html>
<html>
<head>
    <title>{{ $course->name }} - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section { margin-bottom: 20px; }
        .item { padding: 8px; background: #f1f1f1; margin-bottom: 5px; border-radius: 5px; }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2>{{ $course->name }}</h2>

    <div class="section">
        <h4>Materials</h4>
        @forelse($materials as $material)
            <div class="item">{{ $material->title }}</div>
        @empty
            <div class="item">No materials yet.</div>
        @endforelse
    </div>

    <div class="section">
        <h4>Assignments</h4>
        @forelse($assignments as $assignment)
            <div class="item">{{ $assignment->aid }} - Due: {{ $assignment->due_date }}</div>
        @empty
            <div class="item">No assignments yet.</div>
        @endforelse
    </div>

    <a href="{{ route('student.courses') }}" class="btn btn-primary">Back to Courses</a>
</div>
</body>
</html>