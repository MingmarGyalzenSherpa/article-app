{{-- . denotes / --}}
@extends('layout.app') 

@section('content')
<div class="container mt-3 card p-3 " >
  @if(Session::has('fail'))

  <div class="alert alert-danger" role="alert">
    {{Session::get('fail')}}
  </div>
  @endif
  <h2> LOGIN </h2>
    <form action="{{route('loginUser')}}" method="POST">
      @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
