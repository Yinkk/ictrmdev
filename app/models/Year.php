<?php
class Year extends Eloquent{
	protected $table = 'year';

	public static function validate($inputs){
		$rules = array(
			'year' => 'required',
			'budget' => 'required'
			);
		$message = array(
			'year.required' => 'คุณยังไม่ได้กรอกปีงบประมาณ',
			'budget.required' => 'คุณยังไม่ได้กรอกงบประมาณ'
			);

		return Validator::make($inputs, $rules, $message);
	}
}
?>