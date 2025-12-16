<!DOCTYPE html>
<html>
<head>
    <title>Student Register - LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f6d365, #fda085);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            background-color: #fff;
            width: 100%;
            max-width: 450px;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-weight: bold;
        }

        .btn-primary {
            background: linear-gradient(to right, #f6d365, #fda085);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #fda085, #f6d365);
        }

        .link-btn {
            text-decoration: none;
            color: #fda085;
            font-weight: 500;
        }

        .link-btn:hover {
            color: #f6d365;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Student Register</h2>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('register.student.post') }}">
        @csrf

        <div class="mb-3">
            <input type="text" name="sid" class="form-control" placeholder="Student ID" required>
        </div>

        <div class="mb-3">
            <input type="text" name="sname" class="form-control" placeholder="Full Name" required>
        </div>

        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <input type="text" name="phone" class="form-control" placeholder="Phone">
        </div>

        <div class="mb-3">
            <input type="text" name="address" class="form-control" placeholder="Address">
        </div>

        <div class="mb-3">
            <input type="text" name="yearLevel" class="form-control" placeholder="Year Level">
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
        </div>
    </form>

    <div class="text-center">
        <a href="{{ route('login') }}" class="link-btn">Already have an account? Login</a>
    </div>
</div>

</body>
</html>