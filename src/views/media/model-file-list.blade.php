<table>
	<tr><th>Medias</th><th>Actions</th></tr>
		@foreach ($model->media as $media)
		<tr><td>
			Path  : {{ $media->path }} <br>
			File : {{ basename($media->path) }}
		</td>
		<td>	
			Delete Show
		</td>
		</tr>
		
		@endforeach	
</table>


