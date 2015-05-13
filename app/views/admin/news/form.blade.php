@extends('admin')

@section('content_admin')

<div class="page-header">
	<h3>
		News <small>Create & Update</small>

		<div class="pull-right">
			<a href="{{ url('admin/news/index') }}" class="btn btn-sm btn-default"><i class="fa fa-reply"></i>Back</a>
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

<div class="form-group {{ ! empty($errors->first('title')) ? 'has-error' : '' }} " >
	<label class="control-label col-md-2">Title :</label>
	<div class="col-md-5">
		<input type="text" name="title" value="{{ ! empty($news->title) ? $news->title : Input::old('title') }}" class="form-control">
	</div>
</div>

<div class="form-group {{ ! empty($errors->first('detail')) ? 'has-error' : '' }} ">
	<label class="control-label col-md-2">Detail :</label>
	<div class="col-md-5">
		<textarea class="form-control" rows="5" name="detail">{{ ! empty($news->detail) ? $news->detail : Input::old('detail') }}</textarea>
	</div>
</div>

<div class="form-group">
	<div class="col-md-offset-2">
		@if(! empty($news))
		<input type="hidden" name="id" value="{{ $news->id }}">
		@endif
		<input type="submit" value="Save" class="btn btn-primary">
	</div>
</div>

{{ Form::close() }}


@stop