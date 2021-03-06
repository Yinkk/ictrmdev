@extends('admin')

@section('content_admin')

<div class="page-header">
	<h3>
		Major <small>Create & Update</small>

		<div class="pull-right">
			<a href="{{ url('admin/system/major') }}" class="btn btn-sm btn-default"><i class="fa fa-reply"></i>Back</a>
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
<div class="form-group {{ ! empty($errors->first('name_th')) ? 'has-error' : '' }} " >
	<label class="control-label col-md-2">Major Name TH :</label>
	<div class="col-md-5">
		<input type="text" name="name_th" value="{{ ! empty($majors->name_th) ? $majors->name_th : Input::old('name_th') }}" class="form-control">
	</div>
</div>

<div class="form-group {{ ! empty($errors->first('name_eng')) ? 'has-error' : '' }} ">
	<label class="control-label col-md-2">Major Name ENG :</label>
	<div class="col-md-5">
		<textarea class="form-control" rows="5" name="name_eng">{{ ! empty($majors->name_eng) ? $majors->name_eng : Input::old('name_eng') }}</textarea>
	</div>
</div>

<div class="form-group">
	<div class="col-md-offset-2">
		@if(! empty($majors))
		<input type="hidden" name="id" value="{{ $majors->id }}">
		@endif
		<input type="submit" value="Save" class="btn btn-primary">
	</div>
</div>

{{ Form::close() }}

@stop