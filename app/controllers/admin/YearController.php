<?php
class Admin_YearController extends BaseController{
	public function getIndex(){
		$data = array(
			'years' => Year::all()
			);
		return View::make('admin.system.year.index', $data);
	}

	public function getCreate(){
		return View::make('admin.system.year.form');
	}

	public function postCreate(){
		$inputs = Input::all();

		$validate = Year::Validate($inputs);

		if($validate->fails()){
			return Redirect::back()
			->withErrors($validate->messages())
			->withInput();
		}else{
			$year = new Year;
			$year->year = $inputs['year'];
			$year->budget = $inputs['budget'];
			$year->save();

			return Redirect::back()->with('message', 'Save Completed');
		}
	}
}
?>