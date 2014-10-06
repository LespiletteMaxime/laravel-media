<?php namespace LespiletteMaxime\Media\Controllers;

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
        // $rules = array(
        //     'image' => "image|max:$max_file_size"
        // );
        $rules = array(
             'image' => "image|max:2000"
        );
        $validator = \Validator::make($input, $rules);
        if ( $validator->fails() )
        {
            return \Response::json(['success' => false, 'errors' => $validator->getMessageBag()->toArray()]);
        }
        else {

            $destinationPath = \Config::get('media::media.default_path').DIRECTORY_SEPARATOR.\Config::get('media::media.folder_structure');
            $filename = $file->getClientOriginalName();

            \Input::file('files')->move($destinationPath, $filename);
            $options = [
        		'mediable_type' => current(\Input::only('alias-class')),
        		'mediable_id' => current(\Input::only('alias-id')),
        		'path' => $destinationPath.DIRECTORY_SEPARATOR.$filename	
        	];
            \LespiletteMaxime\Media\Models\Media::create($options);
            return \Response::json(['success' => true, 'file' => asset($destinationPath.$filename)]);
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
		//
	}
}
