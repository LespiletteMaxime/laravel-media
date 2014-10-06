@forelse($alias->media as $media)
<table class="table">
<tr>
	<th>Media</th>
	<th>Actions</th>
</tr>
<tr>
 <td>
 	<img width=100 height=100 src="{{$media->icon() }}" alt="">
 	<a href="{{ $media->path }}">{{ basename($media->path) }}</a>
 </td>
 <td>	
	 {{ Form::open(array('route' => array('media.destroy', $media->id), 'method' => 'delete')) }}
	   <button type="submit" href="{{ URL::route('media.destroy', $media->id) }}" class="			btn btn-danger btn-mini">Delete</button>
	 {{ Form::close() }}
	 @if(!isset($editor))
	 {{ Form::open(array('route' => array('media.edit', $media->id), 'method' => 'PATCH')) }}
	   <button type="submit" href="{{ URL::route('media.destroy', $media->id) }}" class="			btn btn-info btn-mini">Editer</button>
	 {{ Form::close() }}

	 @endif
 </td>
</tr>
</table>
@include('media::media.editor-edit')
@empty
	<p class="bg-warning">No media</p>
@endforelse	



