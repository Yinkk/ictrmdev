<?php
class Admin_FacultyController extends BaseController{
	public function getIndex(){
		$data = array(
			'facultys' => Faculty::all()
			);
		return View::make('admin.system.faculty.index', $data);
	}

	public function getCreate(){
		return View::make('admin.system.faculty.form');
	}

	public function postCreate(){

		$inputs = Input::all();
		$validate = Faculty::validate($inputs);

		if($validate->fails()){
			return Redirect::back()
			->withErrors($validate->messages())
			->withInput();
		}else{
			$faculty = new Faculty;
			$faculty->name_th = $inputs['name_th'];
			$faculty->name_eng = $inputs['name_eng'];
			$faculty->save();
			return Redirect::back()->with('message', 'Save Completed');
		}
	}
}
?>