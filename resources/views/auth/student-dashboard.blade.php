<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard - LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f6d365, #fda085);
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: bold;
            color: #764ba2 !important;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }
        .btn-courses{
            background: #ff6f61;
            color: #fff;
        }
        .btn-courses.hover{
            background: #ff3b2f;
        }
        .btn-logout {
            background: #764ba2;
            color: #fff;
        }

        .btn-logout:hover {
            background: #667eea;
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
    <a class="navbar-brand" href="#">LMS - Student</a>
    <div class="ms-auto">
        <a href="{{ route('logout') }}" class="btn btn-logout">Logout</a>
    </div>
</nav>

<div class="container mt-4">
<h2>Welcome, {{ session('student')->sname ?? 'Student' }}</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <h5>Profile Information</h5>


<p><strong>ID:</strong> {{ session('student')->sid ?? '' }}</p>
<p><strong>Email:</strong> {{ session('student')->email ?? '' }}</p>
<p><strong>Phone:</strong> {{ session('student')->phone ?? '' }}</p>
<p><strong>Address:</strong> {{ session('student')->address ?? '' }}</p>
<p><strong>Year Level:</strong> {{ session('student')->yearLevel ?? '' }}</p>
<a href="{{ route('student.courses')}}" class="btn btn-courses mt-3">View My Courses</a>
            </div>
        </div>
    </div>

</div>

</body>
</html>