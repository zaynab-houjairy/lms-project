<!DOCTYPE html>
<html>
<head>
    <title>Login - LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
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
            max-width: 400px;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-weight: bold;
        }

        .btn-primary {
            background: linear-gradient(to right, #667eea, #764ba2);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #764ba2, #667eea);
        }

        .link-btn {
            text-decoration: none;
            color: #764ba2;
            font-weight: 500;
        }

        .link-btn:hover {
            color: #667eea;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>LMS Login</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </div>
    </form>

    <div class="text-center">
        <a href="{{ route('register.student') }}" class="link-btn me-3">Register as Student</a>
        <a href="{{ route('register.teacher') }}" class="link-btn">Register as Teacher</a>
    </div>
</div>

</body>
</html>