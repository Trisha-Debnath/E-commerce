@extends('backend.master')
@section('content')

<form action="{{route('customer-formcreate')}}" method="POST" enctype="multipart/form-data" >
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name="Customer_Name" aria-describedby="emailHelp" placeholder="Enter your name">

    @error('Customer_Name')
    <div class="alert alert-danger">{{$message}}</div> 
    @enderror
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="Customer_password" placeholder="Password">
    @error('Customer_password')
    <div class="alert alert-danger">{{$message}}</div> 
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">image</label>
    <input type="file" class="form-control" name="Customer_image" placeholder="image">
    @error('Customer_image')
    <div class="alert alert-danger">{{$message}}</div> 
    @enderror
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection