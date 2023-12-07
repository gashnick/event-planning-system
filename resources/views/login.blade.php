@extends('layout')
@section('title', 'login')
@section('content')
    <body style="background-image: url('images/background.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; opacity: 0.9;">
        <div class="container">
            <form action="{{ route('login_post') }}" method="POST" class="ms-auto me-auto mt-5" style="width: 500px; background-color: white; padding: 20px; border-radius: 10px;">
                @csrf
                <div>
                    <h1 class="form-label mb-4">Log in</h1>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control mb-2" name="password">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </body>
@endsection
