@extends('layouts.default')
@section('content')
<div class="sign-up-form">
<form action="{{ route('check-login') }}" method="post" style="border:1px solid #ccc;padding:20px;"> 
    <h1>Login</h1>
    <p>Please login to access your dashboard.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>   
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="psw-repeat"><b>Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password" required>
    <!--
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
-->
    <div class="clearfix">
      <button type="submit" class="signupbtn">Login</button>
    </div>
    </div>
</form>
@stop
