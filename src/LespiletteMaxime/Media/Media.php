<?php namespace LespiletteMaxime\Media;

class Media extends \Eloquent {

	public function mediable(){
		return $this->morphTo();		
	}

}
