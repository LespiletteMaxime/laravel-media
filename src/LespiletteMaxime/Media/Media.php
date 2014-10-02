<?php

class User extends Eloquent {

	public function mediable(){
		$this->morphTo();		
	}


}
