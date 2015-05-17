@extends('admin')

@section('content_admin')

<div class="page-header">
	<h3>
		Budget Year <small>Create & Update</small>

		<div class="pull-right">
			<a href="{{ url('admin/system/year') }}" class="btn btn-sm btn-default"><i class="fa fa-reply"></i>Back</a>
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
<div class="form-group {{ ! empty($errors->first('year')) ? 'has-error' : '' }} " >
	<label class="control-label col-md-2">Year :</label>
	<div class="col-md-5">
		<input type="text" name="year" value="{{ ! empty($years->year) ? $years->year : Input::old('year') }}" class="form-control">
	</div>
</div>

<div class="form-group {{ ! empty($errors->first('budget')) ? 'has-error' : '' }} ">
	<label class="control-label col-md-2">Budget :</label>
	<div class="col-md-5">
		<textarea class="form-control" rows="5" name="budget">{{ ! empty($years->budget) ? $years->budget : Input::old('budget') }}</textarea>
	</div>
</div>

<div class="form-group">
	<div class="col-md-offset-2">
		@if(! empty($years))
		<input type="hidden" name="id" value="{{ $years->id }}">
		@endif
		<input type="submit" value="Save" class="btn btn-primary">
	</div>
</div>

{{ Form::close() }}

@stop