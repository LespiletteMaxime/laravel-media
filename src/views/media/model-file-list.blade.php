<table>
	<tr><th>Medias</th><th>Actions</th></tr>
@forelse($alias->media as $media)
   <tr>
  	<td>
			Path  : {{ $media->path }} <br>
			File : {{ basename($media->path) }}
			</td>
			<td>	
				Delete Show
			</td>
		</tr>
@empty
    <p>Aucune media associé</p>
@endforelse	
</table>


