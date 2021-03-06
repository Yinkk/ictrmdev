<?php
class Admin_MajorController extends BaseController{
	public function getIndex(){
		$data = array(
			'majors' => Major::all()
			);
		return View::make('admin.system.major.index', $data);
	}

	public function getCreate(){
		return View::make('admin.system.major.form');
	}

	public function postCreate(){
		
		$inputs = Input::all();
		$validate = Major::Validate($inputs);

		if($validate->fails()){
			return Redirect::back()
			->withErrors($validate->messages())
			->withInput();
		}else{
			$major = new Major;

			$major->name_th = $inputs['name_th'];
			$major->name_eng = $inputs['name_eng'];
			$major->save();

			return Redirect::back()->with('message','Save Completd');
 		}
	}

	public function getUpdate($id){
		$data = array(
			'majors' => Major::find($id)
			);
		return View::make('admin.system.major.form', $data);
	}

	public function postUpdate(){

		$inputs = Input::all();

		$major = Major::find($inputs['id']);

		if(is_object($major)){

			$major->name_th = $inputs['name_th'];
			$major->name_eng = $inputs['name_eng'];
			
			$major->save();

			return Redirect::to('admin/system/major/index')->with('message', 'Update Completed');
		}
	}

	public function getDelete($id){
		$major = User::find($id);

		if(is_object($major)){
			$major->delete();
		}
		return Redirect::to('admin/system/major/index')->with('message', 'Delete Completed');
	}
}
?>