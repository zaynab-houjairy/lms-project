<!DOCTYPE html>
<html>
<head>
    <title>My Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .course-btn { display: block; width: 100%; margin-bottom: 10px; }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2>My Courses</h2>
    @forelse($courses as $course)
        <a href="{{ route('student.course.detail', $course->cid) }}" class="btn btn-outline-primary course-btn">
            {{ $course->cname }}
        </a>
    @empty
        <p>No courses enrolled yet.</p>
    @endforelse
</div>
</body>
</html>