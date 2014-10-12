<tr class='item-row'>
 <td>
 	<img width=100 height=100 src="{{ $media->icon() }}" alt=''>
 	<a href="{{$media->path}}">{{basename($media->path)}}</a>
 </td>
 <td class="push-left" style="width:50%;">
 <div class="progress">
	  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
	    <span class="sr-only">0% Complete (success)</span>
	  </div>
	</div>
</td>
 <td class='text-right'>
	


		  {{ Form::open(array('route' => array('media.destroy', $media->id), 'method' => 'delete')) }}
  	 		 <button type='submit' href="{{URL::route('media.destroy', $media->id)}}" class='btn btn-danger btn-mini'>Delete</button>
 		  {{ Form::close() }}
 </td>
</tr>
<!--
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
	@endif
 </td>
</tr>
-->
