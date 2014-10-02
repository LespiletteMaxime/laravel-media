<?php namespace LespiletteMaxime\Media\Controllers;

class MediasController extends \BaseController{

	public function upload(){
		$file = Input::file('file');
		$upload_success = Input::file('file')->move($destinationPath, $filename);
		if( $upload_success ) 
		{
   			return Response::json('success', 200);
		} 
   		return Response::json('error', 400);
	}

	public function uploadForm(){
		return \view::make('media::media.upload-form');
	}
}
