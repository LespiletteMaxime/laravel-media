<table class="table" id="media-list">
<tr>
	<th>Media</th>
	<th class='text-right'>Actions</th>
</tr>
@forelse($alias->media as $media)
<tr>
 <td>
 	<img width=100 height=100 src="{{$media->icon() }}" alt="">
 	<a href="{{ $media->path }}">{{ $media->name() }}</a>
 </td>
 <td class='text-right'>	
	 {{ Form::open(array('route' => array('media.destroy', $media->id), 'method' => 'delete')) }}
	   <button type="submit" href="{{ URL::route('media.destroy', $media->id) }}" class="			btn btn-danger btn-mini">Delete</button>
	 {{ Form::close() }}
	 @if(!isset($editor))
	 {{ Form::open(array('route' => array('media.edit', $media->id), 'method' => 'PATCH')) }}
	   <button type="submit" href="{{ URL::route('media.destroy', $media->id) }}" class="			btn btn-info btn-mini">Editer</button>
	 {{ Form::close() }}
 </td>
</tr>
@endif
</table>
	<!--@include('media::media.editor-edit')-->
@empty
	<p class="bg-warning">No media</p>
@endforelse	
