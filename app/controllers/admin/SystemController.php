<?php
class Admin_SystemController extends BaseController{
	public function getIndex(){
		return View::make('admin.system.index');
	}
}
?>