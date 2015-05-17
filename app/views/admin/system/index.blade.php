@extends('admin')

@section('content_admin')

<div class="page-header">
	<h3>
		Data Information System
	</h3>
</div>
<div class="swiper-tabs" id="main-tabs">
  <div id="tabs" class="tabs-cotnainer">
    <ul class="nav nav-tabs ">
      <li class="active"><a href="#" data-target="#panes-1" data-toggle="tab" data-editor="true" title="หมวดที่ 1 : ข้อมูลทั่วไป">&nbsp;หมวดที่ 1&nbsp;</a></li>
      <li class=""><a href="#" data-target="#panes-2" data-toggle="tab" data-editor="true" title="หมวดที่ 2 : ปีงบประมาณ">&nbsp;หมวดที่ 2&nbsp;</a></li>
    </ul>
  </div>

  <div></br></div>

  <div class="tab-content">
    <div id="panes-1" class="tab-pane active"> 
      <div class="pull-right">
        <a href="{{ url('admin/system/create/faculty') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i>New Faculty</a>
      </div>
      <div class="bs-callout bs-callout-success">
        <h4 style="margin-bottom:0px;"><b>หมวดที่ 1 </b>ข้อมูลทั่วไปคณะ </h4> 
      </div>

      <div><br></div>

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
                          <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx
                            </td>
                            <td>
                              <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                              <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>yyy</td>
                            <td>yyy</td>
                            <td>yyy
                            </td>
                            <td>
                              <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                              <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!--  end content tap -->
    </div><!--  end row -->
    
    <!-- open tap2 -->
    <div id="panes-2" class="tab-pane">
      <div class="pull-right">
        <a href="{{ url('admin/system/create/year') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i>New Year Budget</a>
      </div>
      <div class="bs-callout bs-callout-success">
        <h4 style="margin-bottom:0px;"><b>หมวดที่ 2 </b>ปีงบประมาณ</h4>
      </div>

      <div><br></div>

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
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 207px;">Year Budget</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 188px;">Budget</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="" style="width: 147px;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                            <td>xxx
                            </td>
                            <td>
                              <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                              <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>yyy</td>
                            <td>yyy</td>
                            <td>yyy
                            </td>
                            <td>
                              <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                              <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
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
    </div>
  </div><!-- end <div class="tab-content"> -->
  
@stop