@if (Session::has('new'))
	<div class="alert alert-success" role="alert">
		<strong>Success</strong> {{ Session::get('new') }}
	</div>
@elseif(Session::has('update'))
	<div class="alert alert-success" role="alert">
		<strong>Success</strong> {{ Session::get('update') }}
	</div>
@elseif(Session::has('delete'))
	<div class="alert alert-success" role="alert">
		<strong>Success</strong> {{ Session::get('delete') }}
	</div>
@endif