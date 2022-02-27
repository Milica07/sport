@extends('layouts.app')

@section('title', 'Register')

@section('content')
<form action="/register" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input
      type="text"
      class="form-control @error('name') is-invalid @enderror"
      id="name"
      aria-describedby="nameHelp"
      placeholder="Enter name"
      name="name">
    @error('name')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input
      type="email"
      class="form-control @error('email') is-invalid @enderror"
      id="email"
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
      aria-describedby="emailHelp"
      placeholder="Enter password"
      name="password">
    @error('password')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirm password</label>
    <input
      type="password"
      class="form-control @error('password_confirmation') is-invalid @enderror"
      id="password_confirmation"
      aria-describedby="password_confirmationHelp"
      placeholder="Confirm password"
      name="password_confirmation">
    @error('password_confirmation')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="agreed" name="agreed" value="1">
    <label class="form-check-label" for="agreed">I agree to terms and conditions</label>
    @error('agreed')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
