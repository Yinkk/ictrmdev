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
    <div class="tab-content">
        <div id="panes-1" class="tab-pane active">
            <div class="bs-callout bs-callout-success">
            <h4 style="margin-bottom:0px;"><b>หมวดที่ 1 </b>ข้อมูลทั่วไป </h4>
            </div>
            <div class="br"></div>
            <div class="faq-cat-content">
                <div class="panel-group" id="accordion_g4">
                   <div class="panel panel-default panel-faq">
                       <div class="panel-heading ">
                           <a data-toggle="collapse" data-parent="#accordion_g4" href="#collapse_4_1">
                               <h4 class="panel-title">
                                   <i class="glyphicon glyphicon-edit"></i>1. แผนการเรียนรู้
                                   <span class="pull-right">
                                       <i class="glyphicon glyphicon-chevron-down"></i>
                                   </span>
                               </h4>
                           </a>
                       </div>
                       <div id="collapse_4_1" class="panel-collapse collapse ">
                           <div class="panel-body">        
                               <div id="">
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="panel panel-default panel-faq">
                       <div class="panel-heading ">
                           <a data-toggle="collapse" data-parent="#accordion_g4" href="#collapse_4_2">
                               <h4 class="panel-title">
                                   <i class="glyphicon glyphicon-edit"></i>2. แผนการประเมินผลการเรียนรู้
                                   <span class="pull-right">
                                       <i class="glyphicon glyphicon-chevron-down"></i>
                                   </span>
                               </h4>
                           </a>
                       </div>
                       <div id="collapse_4_2" class="panel-collapse collapse ">
                           <div class="panel-body">       
                            <div id="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="panes-2" class="tab-pane">
        <div class="bs-callout bs-callout-success">
            <h4 style="margin-bottom:0px;"><b>หมวดที่ 2 </b>ปีงบประมาณ</h4>
        </div>
        <div class="br">
        </div>
    </div>
    <div align="center" style="padding-top:10px">
        <button type="button" class="btn btn-primary" id="btn_update" title="" data-loading-text="<strong>Loading...</strong>"><span class="glyphicon glyphicon-floppy-disk"></span><strong>บันทึกข้อมูล</strong></button>
        <button type="button" class="btn btn-danger" id="btn_cancel" title="" onclick="closed_windows();return false"><span class="glyphicon glyphicon-remove"></span><strong>ยกเลิก</strong></button>
    </div>
</div>
@stop