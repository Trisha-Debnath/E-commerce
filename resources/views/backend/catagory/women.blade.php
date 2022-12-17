@extends('backend.master')
@section('content')
<p><h1>makeup</h1>
<h1>Clothing</h1></p>

<div class="div" style="float:left;width:100px">
<a href="{{route('list.create')}}" class="btn btn-primary">Create</a>

</div>

<div class="diva">
<a href="{{route('list.update')}}" class="btn btn-success">Update</a>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">makeup 
        
    </th>
      <th scope="col">saris</th>
      <th scope="col">formal dress</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>poundation 
      <button type="button" class="btn btn-primary">Buy</button>
      </td>
      <td>shipon</td>
      <td>kurtti</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Eyes makeup</td>
      <td>jamdani</td>
      <td>hfj</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>lipe-makeup</td>
      <td>katan</td>
      <td>ty</td>
    </tr>
  </tbody>
</table>


@endsection