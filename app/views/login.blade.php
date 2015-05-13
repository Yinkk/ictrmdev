@extends('default')
@section('content')
	<div class="page-header">
		<h3>
			Login
		</h3>
	</div>

	<form method="post" class="form-inline">
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username">
			<input type="password" name="password" class="form-control" placeholder="Password">
			<input type="submit" value="Login" class="btn btn-primary"> 
		</div>
	</form>
@stop