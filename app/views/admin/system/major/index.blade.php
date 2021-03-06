@extends('admin')

@section('content_admin')

{{ Breadcrumbs::render('major') }} 

<div class="page-header">
  <h3>
    Data Major
    <div class="pull-right">
      <a href="{{ url('admin/system/major/create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i>New Major</a>
    </div>
  </h3>
</div>

@if(Session::has('message'))
<div class="alert alert-info" style="margin-top: 10px;">
  {{ Session::get('message') }}
</div>
@endif

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        DataTables Advanced Tables
      </div>

      <div class="panel-body">
        <div class="dataTable_wrapper">
          <div id="dataTables-example_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
              <div class="col-sm-6">
                <div class="dataTables_length" id="dataTables-example_length"></div>
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
                      <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 20px;">ID</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 207px;">NameTH</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 188px;">NameENG</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 147px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($majors as $major)
                    <tr>
                      <td>{{ $major->id }}</td>
                      <td>{{ $major->name_th }}</td>
                      <td>{{ $major->name_th }}</td>
                      <td>
                        <a href="{{ url("admin/system/major/update/$major->id") }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <a href="{{ url("admin/system/major/delete/$major->id") }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!--  end row -->

@stop