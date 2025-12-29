<!DOCTYPE html>
<html>
<head>
    <title>Teacher Dashboard - LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: bold;
            color: #1e3c72 !important;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }

        .btn-logout {
            background: #1e3c72;
            color: #fff;
        }

        .btn-logout:hover {
            background: #3a5fcd;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            background-color: #fff;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light px-4">
    <a class="navbar-brand" href="#">LMS - Teacher</a>
    <div class="ms-auto">
        <a href="{{ route('logout') }}" class="btn btn-logout">Logout</a>
    </div>
</nav>

<div class="container mt-4">
 <h2>Welcome, {{ session('teacher')->tname ?? 'Teacher' }}</h2>
    <div class="row">

        <div class="col-md-6">
            <div class="card p-3">
                <h5>Profile Information</h5>


<p><strong>ID:</strong> {{ session('teacher')->tid ?? '' }}</p>
<p><strong>Email:</strong> {{ session('teacher')->email ?? '' }}</p>
<p><strong>Phone:</strong> {{ session('teacher')->phone ?? '' }}</p>
<p><strong>Address:</strong> {{ session('teacher')->address ?? '' }}</p>
<p><strong>Specialization:</strong> {{ session('teacher')->specialization ?? '' }}</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>