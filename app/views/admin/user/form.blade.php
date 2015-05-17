@extends('admin')

@section('content_admin')

<div class="page-header">
	<h3>
		User <small>Create & Update</small>

		<div class="pull-right">
			<a href="{{ url('admin/user/index') }}" class="btn btn-sm btn-default"><i class="fa fa-reply"></i>Back</a>
		</div>
	</h3>
</div>

{{ Form::open(array('class'=>'form-horizontal')) }}

@if(Session::has('message'))
<div class="alert alert-info" style="margin-top: 10px;">
	{{ Session::get('message') }}
</div>
@endif

@if($errors->count() > 0 )
<div class="alert alert-danger" style="margin-top: 10px;">
	<p>The following errors have occurred:</p>
	<ul>
		@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="form-group {{ ! empty($errors->first('username')) ? 'has-error' : '' }} " >
	<label class="control-label col-md-2">Username :</label>
	<div class="col-md-5">
		<input type="text" name="username" value="{{ ! empty($user->username) ? $user->username : Input::old('username') }}" class="form-control">
	</div>
</div>

<div class="form-group {{ ! empty($errors->first('password')) ? 'has-error' : '' }} ">
	<label class="control-label col-md-2">Password :</label>
	<div class="col-md-5">
		<input type="password" name="password" value="{{ Input::old('password') }}" class="form-control">
		@if(! empty($user->password))
		<small>Leave blank if you don't want to edit new password</small>
		@endif
	</div>
</div>

<div class="form-group {{ ! empty($errors->first('fullname')) ? 'has-error' : '' }}">
	<label class="control-label col-md-2">Fullname :</label>
	<div class="col-md-5">
		<input type="text" name="fullname" value="{{ ! empty($user->fullname) ? $user->fullname : Input::old('fullname') }}" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-2">Group</label>
	<div class="col-md-5">

		@if(! empty($user->role))
			@foreach($user->role as $r)
				<input type="checkbox" name="" value="" checked="checked" disabled="disabled" />{{ $r->name }}
			@endforeach

		<a class="btn btn-warning" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		<i class="fa fa-plus-circle"></i>แก้ไขสิทธิ์</a>
		<div class="collapse" id="collapseExample">
			<div class="well">				
				<input type="checkbox" name="role[]" value="1" />Admin
				<input type="checkbox" name="role[]" value="2" />User
			</div>
		</div>	  

		@else
		<input type="checkbox" name="role[]" value="1">Admin
		<input type="checkbox" name="role[]" value="2">User
		@endif

	</div>
</div>

<div class="form-group">
	<div class="col-md-offset-2">
		@if(! empty($user))
		<input type="hidden" name="id" value="{{ $user->id }}">
		@endif
		<input type="submit" value="Save" class="btn btn-primary">
	</div>
</div>

{{ Form::close() }}


@stop