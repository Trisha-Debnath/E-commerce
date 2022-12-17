@extends('backend.master')
@section('content')
<form action="{{route('makeup-a')}}" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" Name="Name">
    @csrf
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" Name="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection