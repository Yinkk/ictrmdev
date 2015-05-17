<?php
class Role extends Eloquent{
	public $table = 'role';

	 //protected $fillable = ['id', 'name','created_at','deleted_at'];

	public function user(){
		return $this->belongsToMany('User');
	}
}
?>