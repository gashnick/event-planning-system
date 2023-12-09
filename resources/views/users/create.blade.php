@extends('layout')
@section('title', 'Create User')
@section('content')
    <body style="background-image: url('images/background.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; opacity: 0.9;">
        <div class="container">
            <div class="mt-5">
                @if($errors->any())
                    {{-- Handle errors if needed --}}
                @endif
            </div>
            <form action="{{ route('create') }}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px; background-color: white; padding: 20px; border-radius: 10px;">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label mb-3">First name</label>
                            <input type="text" class="form-control mb-3" name="firstName" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mb-3">Last name</label>
                            <input type="text" class="form-control mb-2" name="lastName" required>
                        </div>
                    </div>
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword">
                </div>
                <button type="submit" class="btn btn-primary">Create User</button>
            </form>
        </div>
    </body>
@endsection
