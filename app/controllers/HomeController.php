<?php
	class HomeController extends Controller{

		public function getIndex(){
			return View::make('index');
		}
	}
?>