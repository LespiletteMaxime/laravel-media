<?php
/**
 * 	Media routes
 */
// Route::get('/media/upload',[
// 	'uses'=>'LespiletteMaxime\Media\Controllers\MediasController@upload',
// 	'as'=> 'upload_path'
// ]);
// Route::get('/media/uploadForm',[
// 	'uses' => 'LespiletteMaxime\Media\Controllers\MediasController@uploadForm',
// 	'as'=> 'upload_form'
// ]);
Route::resource('media','LespiletteMaxime\Media\Controllers\MediasController');
Route::get('/progress','LespiletteMaxime\Media\Controllers\MediasController@progress');
