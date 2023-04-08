@extends('layouts.app')
@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <div class="card bg-white">
        <div class="card-body p-5">
          <form action="{{route('register')}}" method="POST" class="mb-3 mt-md-4">
            @csrf
            <h2 class="fw-bold mb-2 text-uppercase ">Blog</h2>
            <p class=" mb-5">Please register an account!</p>
            <div class="mb-3">
              <input type="text" name = "name" class="form-control" value="{{old('name')}}" id="name" placeholder="name">
            </div>

            @error('name')
                <p class="text-sm text-danger">{{$message}}</p>
            @enderror

            <div class="mb-3">
              <input type="text" name = "username" class="form-control" value="{{old('username')}}" id="username" placeholder="Username">
            </div>

            @error('username')
                <p class="text-sm text-danger">{{$message}}</p>
            @enderror

            <div class="mb-3">
              <input type="email" name="email" class="form-control" value="{{old('email')}}" id="email" placeholder="name@example.com">
            </div>

            @error('email')
                <p class="text-sm text-danger">{{$message}}</p>
            @enderror
            
            <div class="mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="*******">
            </div>

            @error('password')
                <p class="text-sm text-danger">{{$message}}</p>
            @enderror

            <div class="mb-3">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="*******">
            </div>

            @error('password_confirmation')
                <p class="text-sm text-danger">{{$message}}</p>
            @enderror


            <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
            <div class="d-grid">
              <button class="btn btn-outline-dark" type="submit">Register</button>
            </div>
          </form>
          <div>
            <p class="mb-0  text-center">Already have an account? <a href="{{route('register')}}" class="text-primary fw-bold">Log in</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
    
@endsection