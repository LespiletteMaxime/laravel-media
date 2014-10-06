<table class="table">
	<tr><th>Medias</th><th>Actions</th></tr>
@forelse($alias->media as $media)
   <tr>
  	<td>
		<a href="{{ $media->path }}">{{ basename($media->path) }}</a>
			</td>
			<td>	
			

	{{ Form::open(array('route' => array('media.destroy', $media->id), 'method' => 'delete')) }}
	<button type="submit" href="{{ URL::route('media.destroy', $media->id) }}" class="			btn btn-danger btn-mini">Delete</button>
    {{ Form::close() }}
    
			</td>
		</tr>
@empty
    <p>Aucune media associé</p>
@endforelse	
</table>


