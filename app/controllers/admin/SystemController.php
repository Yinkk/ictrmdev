<?php
class Admin_SystemController extends BaseController{
	public function getIndex(){
		return View::make('admin.system.index');
	}

	public function getCreate(){
		return View::make('admin.system.form');
	}
}
?>