@extends('layouts.default')
@section('content')
<div class="sign-up-form">
<form action="{{ route('player.store',[$teamId]) }}" method="post" style="border:1px solid #ccc;padding:20px;"> 
    <h1>Add Player In <b>{{ ucfirst($teamId) }}</b> Team</h1>
    <hr>
    {{ csrf_field() }}
    <label for="email"><b>Player Name</b></label>
    <input type="text" placeholder="Player Name" name="name" required>   
    <label for="email"><b>Player Email</b></label>
    <input type="text" placeholder="Player Email" name="email" required> 
    <div class="clearfix">
      <button type="submit" class="signupbtn">Add Player</button>
    </div>
    </div>
</form>
@stop
