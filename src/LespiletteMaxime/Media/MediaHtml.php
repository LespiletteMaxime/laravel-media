<?php namespace LespiletteMaxime\Media;

use View;
class MediaHtml {

	/**
	 * Return the iframe to uploaded 
	 * @param  [type] $model [description]
	 * @return [type]        [description]
	 */
	public function iframe($model){
		// $model_id = $model->getKey();
		// $model_name = $model->getMorphClass();
		return View::make('media::media.iframe',compact('model'));
	}
}
