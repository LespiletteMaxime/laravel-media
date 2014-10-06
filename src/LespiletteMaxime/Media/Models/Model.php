<?php namespace LespiletteMaxime\Media\Models;

class Media extends \Eloquent {
	public $fillable = ['mediable_id','mediable_type','path'];
	public function mediable(){
		return $this->morphTo();		
	}
}
