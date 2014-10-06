<?php namespace LespiletteMaxime\Media\Models;

class Media extends \Eloquent {
	public $fillable = ['mediable_id','mediable_type','path'];
//	public $rules = [];
	

	public function mediable(){
		return $this->morphTo();		
	}

	// public function validate()
	// {
	// 	$v = \Validator::make($this->getAttributes(),static::rules);
	// 	if($v->fails()){
	// 		$this->errors = $v->messages();
	// 		return false;
	// 	}
	// 	return true;
	// }


	public function getType(){
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		return finfo_file($finfo,public_path().$this->path);
	}
	public function icon(){
		switch($this->getType()){
			case 'image/jpeg':
			case 'image/jpg':
			case 'image/png':
			case 'image/gif': return $this->path;break;
			case 'application/pdf' : return 'http://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Pdf_icon.png/110px-Pdf_icon.png';break;
			default : return 'http://megaicons.net/static/img/icons_sizes/8/178/32/very-basic-file-icon.png';
		}
	}
}
