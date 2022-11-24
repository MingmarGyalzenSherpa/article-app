@extends('layout.app')

@section('content')

<div class="container mt-3">
    <h1>Dashboard Page</h1>
    <form action="{{route('logout')}}" method="GET">

        <button type="submit" class="btn btn-danger"  >Log out</button>
    </form>
</div>

@endsection