@extends('layout.app')

@section('content')

<div class="card-container mt-3">
  
  <div class="shadow  card p-3">
    <h2> REGISTER </h2>
    <form action="{{route('registerUser')}}" method="POST" >
        @csrf
        <div class="mb-3 ">
            <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name">
            @error('name')
            <div class="invalid-feedback">

              {{$message}}
            </div>
            @enderror
        </div>  
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp"  name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          @error('email')
          <div class="invalid-feedback">
            {{$message}}
          </div>

          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
          @error('password')

          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        {{-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>

@endsection