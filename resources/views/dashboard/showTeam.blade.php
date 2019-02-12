@extends('layouts.default')
@section('content')
<div class="sign-up-form">
    <h1>List of players of team {{ $team->name }} :-</h1>
 @if($team->getPlayer())  
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
@foreach($team->getPlayer as $key => $player)
<tr>
<th scope="col">{{ $key+1 }}</th>
<td>{{ $player->name }}</td>
<td>{{ $player->email }}</td>
<td>
<form action="{{ route('player.destroy',[$player->team_id,$player->id])}}"" method="POST" onSubmit="return confirm('Are you sure you want delete')">
 @method('DELETE')
 @csrf
 <button type="submit" class="delete"> Delete</button>               
</form>
</td>

</tr>

@endforeach
</tbody>
</table>
@endif
    
</div>
@stop
