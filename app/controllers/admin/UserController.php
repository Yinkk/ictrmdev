<?php
class Admin_UserController extends Controller{
	public function getIndex(){

		$data = array(
			'users' => User::with(['role'])->get()
			);
		//return $data;
		return View::make('admin.user.index', $data);
	}

	public function getCreate(){
		return View::make('admin.user.form');
	}

	public function postCreate(){

		$inputs = Input::all();

		//return $inputs;

		$validate = User::validate($inputs);

		if($validate->fails()){
			return Redirect::back()
			->withErrors($validate->messages())
			->withInput();
		}else{
			$user = new User;
			$user->username = $inputs['username'];
			$user->password = Hash::make($inputs['password']);
			$user->fullname = $inputs['fullname'];
			//$user->role = $inputs['role'];
			$user->save();

			$u = $user->find($user->id);
			$u->role()->attach($inputs['role']);

			return Redirect::back()->with('message', 'Save Completed');
		}
	}

	public function getUpdate($id){
		$data = array(
			'users' => User::with(['role'])->get()->find($id)
			);
		//return $data;
		return View::make('admin.user.form', $data);
	}

	public function postUpdate(){
		$inputs = Input::all();
		
		$user = User::find($inputs['id']);

		if(is_object($user)){
			$user->username = $inputs['username'];
			$user->password = ! empty($input['password']) ? Hash::make($inputs['password']) : $user->password;
			$user->fullname = $inputs['fullname'];
			$user->group = $inputs['group'];
			$user->save();

			return Redirect::to('admin/user/index')->with('message', 'Update Completed');
		}
	}

	public function getDelete($id){
		$user = User::find($id);

		if(is_object($user)){
			$user->delete();
			$user->role()->detach($user->role);
		}
		return Redirect::to('admin/user/index')->with('message', 'Delete Completed');
	}

}
?>