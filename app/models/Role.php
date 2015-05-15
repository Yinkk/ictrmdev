<?php
class Role extends Eloquent{
	public $table = 'role';

	public function user(){
		return $this->belongsToMany('User');
	}
}
?>