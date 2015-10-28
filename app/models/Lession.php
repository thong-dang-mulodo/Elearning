<?php

class Lession extends \Eloquent {
	protected $fillable = [];

	public function course() {
		return $this->belongsTo('Course');
	}
}