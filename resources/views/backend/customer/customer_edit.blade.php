@extends('backend.master')
@section('content')
<form action="{{route('update.customer',$customerEdit->id)}}" method="post" > 
   @csrf 
   @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name="Customer_Name" value="{{$customerEdit->Customer_Name}}" placeholder="customer name" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="Customer_password" value="{{$customerEdit->Customer_password}}"  placeholder="customer password" >
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection