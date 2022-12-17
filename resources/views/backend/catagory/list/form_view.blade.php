@extends('backend.master')
@section('content')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Edit</th>
      
    </tr>
  </thead>
  <tbody>
    
  @foreach($makeupcategory as $singlemakeup)
  <tr>
       

      <th scope="row">{{$singlemakeup->id}}</th>
      <td>{{$singlemakeup->Name}}</td>
      <td>{{$singlemakeup->Password}}</td>
      <td><a href="{{route('makeup-delete',$singlemakeup->id)}}" class="btn btn-danger">Delete</a></td>
      
   
    </tr>
    @endforeach
    
    

  </tbody>
</table>
@endsection