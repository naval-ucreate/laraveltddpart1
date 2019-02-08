@extends('layouts.default')
@section('content')
<div class="sign-up-form">
<form action="{{ route('team.store') }}" method="post" style="border:1px solid #ccc;padding:20px;"> 
    <h1>Add Team</h1>
    <hr>
    {{ csrf_field() }}
    <label for="email"><b>Team Name</b></label>
    <input type="text" placeholder="Team Name" name="name" required>   
    <div class="clearfix">
      <button type="submit" class="signupbtn">Add Team</button>
    </div>
    </div>
</form>
@stop
