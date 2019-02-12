@extends('layouts.default')
@section('team', 'active')
@section('content')
<div class="sign-up-form">
<h1>Teams &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{ route('team.create') }}">Add Team</a></span></h1>
@if($teamData->count())  
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Action</th>
<th scope="col">Add Player</th>
</tr>
</thead>
<tbody>
@foreach($teamData as $key => $teamVal)
<tr>
<th scope="col">{{ $key+1 }}</th>
<td><a href="{{ route('team.show',[$teamVal->id])}}">{{ $teamVal->name }}</a></td>
<td><a href="{{ route('team.show',[$teamVal->id])}}">View</a> 
/ <a href="{{ route('team.edit',[$teamVal->id])}}">Edit</a> 
<form action="{{ route('team.show',[$teamVal->id])}}"" method="POST" onSubmit="return confirm('Are you sure you want delete')">
 @method('DELETE')
 @csrf
 <button type="submit" class="delete"> Delete</button>               
</form>
</td>
<td><a href="{{ strtolower(route('player.create',[$teamVal->id])) }}">Add Player</a></td>
</tr>

@endforeach
</tbody>
</table>
@endif
@stop
