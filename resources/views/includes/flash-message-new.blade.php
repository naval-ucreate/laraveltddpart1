@if(session('message'))
<div id="success-alert" class="alert alert-{{ session('status') }}">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('message') }}
</div>
@endif