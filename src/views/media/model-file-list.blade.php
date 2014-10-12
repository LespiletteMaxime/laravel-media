<table class="table" id="media-list">
<tr class="media-th">
	<th>Media</th>
	<th>&nbsp;</th>
	<th class='text-right'>Actions</th>
</tr>
@forelse($alias->media as $media)
	@include('media::media.item',$media)
	<!--@include('media::media.editor-edit')-->
@empty
	<p class="bg-warning">No media</p>
@endforelse	
</table>
