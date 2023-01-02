@extends('backend.master')
@section('content')
@if (session('success'))
<div class="alert alet-success">
  {{session("success")}}
</div>
@endif
@if (session('danger'))
<div class="alert alet-danger">
  {{session("danger")}}
</div>
@endif

<div class="create">
    <a href="{{route('customer-form')}}" class="btn btn-info">CREATE</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Image</th>

      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($customerlist as $customer)
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->Customer_Name}}</td>
      <td>{{$customer->Customer_password}}</td>
      <td><img width="70px" src="{{url('/uploads/Customer',$customer->Customer_image)}}" alt=""></td>

      <td><a href="{{route('customer.edit',$customer->id)}}" class="btn btn-outline-warning">Update</a></td>
      <td>
      <a class="btn btn-outline-dark" href="{{route('customer-delete',$customer->id)}}">Delete</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center">{{$customerlist->links()}}</div>
@endsection