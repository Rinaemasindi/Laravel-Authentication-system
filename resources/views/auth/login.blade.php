@extends('layouts.app')
@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      
      @if (session('status'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      <div class="card bg-white">
        <div class="card-body p-5">
          <form method="POST" action="{{route('login')}}" class="mb-3 mt-md-4">
            @csrf
            <h2 class="fw-bold mb-2 text-uppercase ">Login/Register System</h2>
            <p class=" mb-5">Please enter your login and password!</p>
            
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

            <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
            <div class="d-grid">
              <button class="btn btn-outline-dark" type="submit">Login</button>
            </div>
          </form>
          <div>
            <p class="mb-0  text-center">Don't have an account? <a href="{{route('register')}}" class="text-primary fw-bold">Register</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
    
@endsection