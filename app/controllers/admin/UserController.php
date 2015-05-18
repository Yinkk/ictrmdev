<?php

class Admin_UserController extends Controller
{
    public function getIndex()
    {

        $data = array(
            'users' => User::with('role')->get()
        );
        //return $data;
        return View::make('admin.user.index', $data);
    }

    public function getCreate()
    {
        return View::make('admin.user.form');
    }

    public function postCreate()
    {

        $inputs = Input::all();

        $validate = User::validate($inputs);

        if ($validate->fails()) {
            return Redirect::back()
                ->withErrors($validate->messages())
                ->withInput();
        } else {
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

    public function getUpdate($id)
    {
        $data = array(
            'user' => User::with('role')->find($id)
        );
        //return $data;
        return View::make('admin.user.form', $data);
    }

    public function postUpdate()
    {

        $inputs = Input::all();
        //return $inputs['role'];
        $user = User::find($inputs['id']);

        if (is_object($user)) {

            $user->username = $inputs['username'];
            $user->password = !empty($input['password']) ? Hash::make($inputs['password']) : $user->password;
            $user->fullname = $inputs['fullname'];
            //$user->group = $inputs['group'];
            $user->save();
            $roles_id = array();

            if (!empty($inputs['role'])) {
                // //deleted table role_user old
                // $user->role()->detach();

                // //add table role_user new
                // $u = $user->find($user->id);
                // $u->role()->attach($inputs['role']);
                //array_push($roles_id,$inputs['role']);
                $user->role()->sync($inputs['role']);
            } else {
                $user->role()->sync([]);
            }


            return Redirect::to('admin/user/index')->with('message', 'Update Completed');
        }
    }

    public function getDelete($id)
    {
        $user = User::find($id);

        if (is_object($user)) {
            $user->delete();
            $user->role()->detach();
        }
        return Redirect::to('admin/user/index')->with('message', 'Delete Completed');
    }
}

?>