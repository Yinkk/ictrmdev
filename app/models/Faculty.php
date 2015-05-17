<?php
class Faculty extends Eloquent{
	protected $table = 'faculty';

	public static function validate($inputs){
		$rules = array(
			'name_th' => 'required',
			'name_eng' => 'required'
			);

		$message = array(
			'name_th.required' => 'คุณไม่ได้กรอกชื่อคณะภาษาไทย',
			'name_eng.required' => 'คุณไม่ได้กรอกชื่อคณะภาษาอังกฤษ'
			);

		return Validator::make($inputs, $rules, $message);

	}
}
?>