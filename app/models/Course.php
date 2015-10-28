<?php

class Course extends \Eloquent {
	protected $fillable = [];

	public function lessions() {
		return $this->hasMany('Lession');
	}
}