@extends('layout')
@section('title', 'signup')
@section('content')
<div class='container'>
<div class="mt-5">
  @if($errors->any())
  @endif
</div>
<form  action="{{route('signup_post')}}" method="POST" class="ms-auto me-auto mt-auto" style='width: 500px;'>
  @csrf
  <div class="mb-3">
  <div class="input-groupt mt-5">
      <span class="form-label mb-3">First name</span>
      <input type="text"  class="form-control mb-3" name="firstName">
      <span class="iform-label mb-3">Last name</span>
  <input type="text" class="form-control mb-2" name="lastName">
  </div>
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
    <label  class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="confirmPassword">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
@endsection