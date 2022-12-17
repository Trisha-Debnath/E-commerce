@extends('backend.master')
@section('content')
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">catagory Name</th>
      <th scope="col">Catagory Details</th>
      <th scope="col">Edit</th>
      <th scope="col">update</th>
    </tr>
  </thead>
  <tbody>
    @foreach($food as $singlefood)
    <tr>
      <th scope="row">{{ $singlefood->id}}</th>
      <td>{{ $singlefood->category_name}}</td>
      <td>{{ $singlefood->category_details}}</td>
    <td><a href="{{route('food-delete',$singlefood->id)}}" class="btn btn-danger">Delete</a></td>
      
    <td><a href="{{route('editpage',$singlefood->id)}}" class="btn btn-primary">update</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection