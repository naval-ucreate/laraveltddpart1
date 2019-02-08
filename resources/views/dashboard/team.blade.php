@extends('layouts.default')
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
</tr>
</thead>
<tbody>
<tr>
@foreach($teamData as $key => $teamVal)
<tr>
<th scope="col">{{ $key+1 }}</th>
<td><a href="{{ route('team.show',[$teamVal->id])}}">{{ $teamVal->name }}</a></td>
<td><a href="{{ route('team.show',[$teamVal->id])}}">View</a> 
/ <a href="{{ route('team.edit',[$teamVal->id])}}">Edit</a> 
<form action="{{ route('team.show',[$teamVal->id])}}"" method="POST">
 @method('DELETE')
 @csrf
 <button type="submit" class="delete"> Delete</button>               
</form>
</td>
</tr>
@endforeach
</tr>
</tbody>
</table>





@endif
@stop
