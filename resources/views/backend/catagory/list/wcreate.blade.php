@extends('backend.master')
@section('content')
<h1>Create Form</h1>


<form action="list.create" method="POST">
  @csrf
  <label for="email">Email address:</label>
  <input type="text" class="form-control" placeholder="Enter email" name="email">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" placeholder="Enter password" name="password">
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  </tbody>
</table>


@endsection