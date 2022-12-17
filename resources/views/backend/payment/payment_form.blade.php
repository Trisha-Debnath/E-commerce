@extends('backend.master')
@section('content')

<form action="{{route('payment-formcreate')}}" method="POST" >
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name="Payment_Name" aria-describedby="emailHelp" placeholder="Enter your name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="Payment_password" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection