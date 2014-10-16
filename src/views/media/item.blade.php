<tr class='item-row'>
 <td>
 	<img width=100 height=100 src="{{ $media->icon() }}" alt=''>
 	<a href="{{$media->path}}">{{basename($media->path)}}</a>
 </td>
  <td class='text-right'>
	 <button type='submit' class='file-delete btn btn-danger btn-mini' data-id="{{$media->id}}">Delete</button>
 </td>
</tr>
