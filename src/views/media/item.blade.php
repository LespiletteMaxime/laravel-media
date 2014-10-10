<tr>
 <td>
 	<img width=100 height=100 src="{{ $media->icon() }}" alt=''>
 	<a href="{{$media->path}}">{{basename($media->path)}}</a>
 </td>
 <td class='text-right'>	
		  {{ Form::open(array('route' => array('media.destroy', $media->id), 'method' => 'delete')) }}
  	 		 <button type='submit' href="{{URL::route('media.destroy', $media->id)}}" class='btn btn-danger btn-mini'>Delete</button>
 		  {{ Form::close() }}
 </td>
</tr>
