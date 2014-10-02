<?php namespace LespiletteMaxime\Media;

class MediaHtml {

	public function iframe($model){
		return \View::make('LespiletteMaxime\Media::media.iframe');
	}
}
