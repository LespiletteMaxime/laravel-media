<div class="row">
	@include('media::media.upload-form',['alias'=>$alias])
	<hr />
	@include('media::media.model-file-list',['alias'=>$alias])
</div>
