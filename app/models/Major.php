<?php
class Major extends Eloquent{
	protected $table = 'major';

	public static function validate($inputs){

		$rules = array(
			'name_th' => 'required',
			'name_eng' => 'required'
			);

		$message = array(
			'name_th.required' => 'คูณไม่ได้กรอกชื่อสาขาภาษาไทย',
			'name_eng.required' => 'คูณไม่ได้กรอกชื่อสาขาภาษาอังกฤษ'
			);
		return Validator::make($inputs, $rules, $message);
	}
}
?>