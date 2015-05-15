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

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>

            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="dataTables-example_length">
                                    <!-- <label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label> -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="dataTables-example_filter" class="dataTables_filter">
                                    <!-- <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 207px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 188px;">Role</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 147px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($users) > 0)
                                        @foreach($users as $u)
                                        <tr>
                                            <td>{{ $u->fullname }}</td>
                                            <td>
                                                <?php foreach($u->role as $r) : ?>
                                                    {{$r->name}}
                                                <?php endforeach; ?>
                                            </td>
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
            </div>
        </div>
    </div>
</div>

@stop