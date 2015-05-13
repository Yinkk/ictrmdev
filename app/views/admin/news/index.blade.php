@extends('admin')

@section('content_admin')

<div class="page-header">
	<h3>
		News

		<div class="pull-right">
			<a href="{{ url('admin/news/create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i>Add News</a>
		</div>
	</h3>
</div>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th width="5%">ID</th>
			<th>Title</th>
			<th>Detail</th>
			<th width="15%">Action</th>
		</tr>
	</thead>
	<tbody>

		@if($news->count() > 0)
		@foreach($news as $n)
		<tr>
			<td>{{ $n->id }}</td>
			<td>{{ $n->title }}</td>
			<td>{{ $n->title }}</td>
			<td>
				<a href="{{ url("admin/news/update/$n->id") }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
				<a href="{{ url("admin/news/delete/$n->id") }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
			</td>
			
		</tr>
		@endforeach
		@endif
	</tbody>
</table>

{{ $news->links(); }}

@stop