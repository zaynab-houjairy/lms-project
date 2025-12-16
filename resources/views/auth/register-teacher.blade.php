<!DOCTYPE html>
<html>
<head>
    <title>Teacher Register - LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
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
            background: linear-gradient(to right, #a1c4fd, #c2e9fb);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #c2e9fb, #a1c4fd);
        }

        .link-btn {
            text-decoration: none;
            color: #c2e9fb;
            font-weight: 500;
        }

        .link-btn:hover {
            color: #a1c4fd;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Teacher Register</h2>

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('register.teacher.post') }}">
        @csrf

        <div class="mb-3">
            <input type="text" name="tid" class="form-control" placeholder="Teacher ID" required>
        </div>

        <div class="mb-3">
            <input type="text" name="tname" class="form-control" placeholder="Full Name" required>
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
            <input type="text" name="specialization" class="form-control" placeholder="Specialization">
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