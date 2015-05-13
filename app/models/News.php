<?php
	class News extends Eloquent{

		protected $table = 'news';

		public static function validate($inputs){
		$rules = array(
			'title' => 'required',
			'detail' => 'required',
			);

		$message = array(
			'title.required' => 'คุณไม่ได้กรอกหัวข้อข่าว',
			'detail.required' => 'คุณไม่ได้กรอกรายละเอียด'
			);

		return Validator::make($inputs, $rules, $message);

	}
	}
?>