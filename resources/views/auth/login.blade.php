@extends('layouts.app')

@section('title', 'Login')

@section('content')
<form action="/login" method="POST">
  @csrf
  <div class="form-group">
    <label for="email">Email</label>
    <input
      type="email"
      class="form-control @error('email') is-invalid @enderror"
      id="email"
      required
      aria-describedby="emailHelp"
      placeholder="Enter email"
      name="email">
    @error('email')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input
      type="password"
      class="form-control @error('password') is-invalid @enderror"
      id="password"
      required
      aria-describedby="emailHelp"
      placeholder="Enter password"
      name="password">
    @error('password')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  @if($invalid_credentials ?? false)
    <div class="alert alert-danger">Invalid credentials</div>
  @endif
  <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
