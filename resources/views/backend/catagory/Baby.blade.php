@extends('backend.master')
@section('content')
<canter>
   <div class="mail">
    <h1>Login</h1>
    <form>
    <div class="name">
      
        User Name:&nbsp;<input type="text" placeholder="enter your name" required>
    </div>
    <div class="pass">
        Password:&nbsp;<input type="password"placeholder="enter your password"required>

    </div>
    <div class="forget">
        <label>Forget password?</label>
        <a href="#"> click hear</a>
    </div>
    <div class="submit">
        <input type="submit" value="Submit" required>
    </div>
    <div class="div">
        <label>New</label>
        <button>
        <a href="child.blade.php">Singup</a></button>
    </div>
</form>
   </div>
</canter>
@endsection