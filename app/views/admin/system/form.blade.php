@extends('admin')

@section('content_admin')

<div class="page-header">
	<h3>
		Data Information 
	</h3>
</div>
<div class="page-header">
	<h3>
		Faculty / Budget Year <small>Create & Update</small>

		<div class="pull-right">
			<a href="{{ url('admin/system/index') }}" class="btn btn-sm btn-default"><i class="fa fa-reply"></i>Back</a>
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

@if(Request::segment(4) == 'faculty')
<!-- open form faculty -->
<div class="form-group {{ ! empty($errors->first('name_th')) ? 'has-error' : '' }} " >
	<label class="control-label col-md-2">Name TH :</label>
	<div class="col-md-5">
		<input type="text" name="name_th" value="{{ ! empty($faculty->name_th) ? $faculty->name_th : Input::old('name_th') }}" class="form-control">
	</div>
</div>

<div class="form-group {{ ! empty($errors->first('name_eng')) ? 'has-error' : '' }} ">
	<label class="control-label col-md-2">Name ENG :</label>
	<div class="col-md-5">
		<textarea class="form-control" rows="5" name="name_eng">{{ ! empty($faculty->name_eng) ? $faculty->name_eng : Input::old('name_eng') }}</textarea>
	</div>
</div>

<div class="form-group">
	<div class="col-md-offset-2">
		@if(! empty($faculty))
		<input type="hidden" name="id" value="{{ $facuty->id }}">
		@endif
		<input type="submit" value="Save" class="btn btn-primary">
	</div>
</div>

@else
<!-- open form Budget Year -->
<div class="form-group {{ ! empty($errors->first('name_th')) ? 'has-error' : '' }} " >
	<label class="control-label col-md-2">Year :</label>
	<div class="col-md-5">
		<input type="text" name="name_th" value="{{ ! empty($faculty->name_th) ? $faculty->name_th : Input::old('name_th') }}" class="form-control">
	</div>
</div>

<div class="form-group {{ ! empty($errors->first('name_eng')) ? 'has-error' : '' }} ">
	<label class="control-label col-md-2">Budget :</label>
	<div class="col-md-5">
		<textarea class="form-control" rows="5" name="name_eng">{{ ! empty($faculty->name_eng) ? $faculty->name_eng : Input::old('name_eng') }}</textarea>
	</div>
</div>

<div class="form-group">
	<div class="col-md-offset-2">
		@if(! empty($faculty))
		<input type="hidden" name="id" value="{{ $facuty->id }}">
		@endif
		<input type="submit" value="Save" class="btn btn-primary">
	</div>
</div>
@endif

{{ Form::close() }}


@stop