@extends('layouts.default')
@section('content')
<div class="sign-up-form">
<form action="{{ route('add-user-data') }}" method="POST" style="border:1px solid #ccc;padding:20px;"> 
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="psw"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" required>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="email"><b>Email</b></label>
    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required value="">   

    <label for="psw-repeat"><b>Password</b></label>
    <input type="password" placeholder="Enter Your Password" name="password" minlength="6" maxlength="15" required value="">
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
    </div>
</form>
@stop
