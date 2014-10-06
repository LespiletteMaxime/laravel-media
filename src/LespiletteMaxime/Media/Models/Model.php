<?php namespace LespiletteMaxime\Media\Models;

class Media extends \Eloquent {
	public $fillable = ['mediable_id','mediable_type','path'];
//	public $rules = [];
	private $imagetype = [
		'image/jpeg',
		'image/jpg',
		'image/png',
		'image/gif'
	];

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
	public function name(){
		return basename($this->path);
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

	public function thumb(){
		if(!in_array($this->getType(),$this->imagetype)){
			return null;
		}
		$options = array_merge(\Config::get('media::thumbs'),\Config::get('thumbs'));	
		$thumb_path_file = public_path()
			.$options['path']
			.DIRECTORY_SEPARATOR
			.$options['folder_structure']
			.$options['prefix']
			.$this->name();

   	    if(\File::exists($thumb_path_file)){
   	    	return $thumb_path_file;
   	    }else{
   	    	
   	    	switch($this->getType()){
   	    		case 'image/jpeg':
   	    		case 'image/jpg': return 'IMAGE JPEG/JPG'; break;
   	    		case 'image/png': return 'IMAGE_PNG';break;
   	    		case 'image/gif': return 'IMAGE_GIF';break;
   	    	}
   	    }
			
		 	// if not create it
		 	// return thumb path
	}

}
