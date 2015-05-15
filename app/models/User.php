<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function validate($inputs){
		$rules = array(
			'username' => 'required',
			'password' => 'required',
			'fullname' => 'required',
			);

		$message = array(
			'username.required' => 'คุณไม่ได้กรอกขอ้มูล Username',
			'password.required' => 'คุณไม่ได้กรอกขอ้มูล Password',
			'fullname.required' => 'คุณไม่ได้กรอกชื่อ-สกุล',
			);

		return Validator::make($inputs, $rules, $message);

	}

	public function role(){
		return $this->belongsToMany('Role')->withTimestamps();
	}

}
