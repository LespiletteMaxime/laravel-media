<?php namespace LespiletteMaxime\Media\Controllers;

use View;
class MediasController extends \BaseController{

	/**
	 * Display a listing of the resource.
	 * GET /media
	 *
	 * @return Response
	 */
	public function index()
	{
		echo "index";
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /media/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /media
	 *
	 * @return Response
	 */
	public function store()
	{
		// Id du model assoocie alias-id
		// nom de la classe alias-class
		$file = \Input::file('files');
        $input = array('image' => $file);

        $max_file_size = \Config::get('media::media.max_file_size');
        $rules = array(
             'image' => "image|max:2000",
             'path' => "unique_with:mediable_type,mediable_id"
        );
        $validator = \Validator::make($input, $rules);
        if ( $validator->fails() )
        {
            return \Response::json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()],500);
        }
        else
        {

        	//Check if file exist and rename it in this case
        	
			$real_path = \Config::get('media::media.default_path').DIRECTORY_SEPARATOR.\Config::get('media::media.folder_structure');

            $destinationPath = 'public'.$real_path;

            $filename = $file->getClientOriginalName();

            \Input::file('files')->move($destinationPath, $filename);
            $options = [
        		'mediable_type' => current(\Input::only('alias-class')),
        		'mediable_id' => current(\Input::only('alias-id')),
        		'path' => $real_path.DIRECTORY_SEPARATOR.$filename	
        	];
        	$rules = array(
             'path' => "unique_with:mediable_type,mediable_id"
        	);
        	
            $media =  \LespiletteMaxime\Media\Models\Media::create($options);
            $template = View::make('media::media.item',compact('media'));

            return \Response::json(
            	['success' => true,
            	 'file' => asset($real_path.DIRECTORY_SEPARATOR.$filename),
            	 'file_name' => $filename,
            	 'media_id' => $media->id,
            	 'template' => $template->render()
            ]);
        }
	}

	/**
	 * Display the specified resource.
	 * GET /media/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /media/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /media/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /media/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$media = \LespiletteMaxime\Media\Models\Media::findOrFail($id);
		if(\File::exists($media->path)){
				\File::delete($media->path);
		}
		if($media->delete($id) )
		{
			return \Response::json(['success' => true]);
		}
			return \Response::json(['success' => false, 'errors' => 'Error while delete media'],500);
	}

	public function progress(){
	  // Assuming default values for session.upload_progress.prefix
	  // and session.upload_progress.name:
	  $s = $_SESSION['upload_progress_'.intval($_GET['PHP_SESSION_UPLOAD_PROGRESS'])];
	  $progress = array(
	    'lengthComputable' => true,
	    'loaded' => $s['bytes_processed'],
	    'total' => $s['content_length']
	  );
	  echo json_encode($progress);	
	}
}
