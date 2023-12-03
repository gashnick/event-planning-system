@extends('layout')
@section('title', 'signup')
@section('content')
<div class='container'>
<form action="{{route('login_post')}}" method="POST" class="ms-auto me-auto mt-5" style='width: 500px;'>
   @csrf
   <div>
    <h1 class="form-label mb-4">Log in</h1>
   </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control mb-2" name="password">
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
@endsection