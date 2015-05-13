@extends('admin')

@section('content_admin')
<div class="page-header">
	<h3>
		Users
		<div class="pull-right">
			<a href="{{ url('admin/user/create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i>New User</a>
		</div>
	</h3>
</div>

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            DataTables Advanced Tables
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 207px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 188px;">Group</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 147px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($users) > 0)
                                    @foreach($users as $u)
                                    <tr>
                                        <td>{{ $u->fullname }}</td>
                                        <td>{{ $u->group }}</td>
                                        <td>
                                            <a href="{{ url("admin/user/update/$u->id") }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="{{ url("admin/user/delete/$u->id") }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->

{{ $users->links(); }}

@stop