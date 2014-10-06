<?php namespace LespiletteMaxime\Media;

use View;
class MediaHtml {

	/**
	 * Return the iframe to uploaded 
	 * @param  [type] $model [description]
	 * @return [type]        [description]
	 */
	public function iframe($alias){
	
		// $alias_id = $alias->getKey();
		// $alias_name = $alias->getMorphClass();
		return View::make('media::media.iframe',compact('alias'));
	}
}
