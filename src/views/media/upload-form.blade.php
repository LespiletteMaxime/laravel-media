
<div class="row">
	<div class="form-group">
		  <input id="formUpload" type="file" name="files" data-url="/media" multiple>
    </div>
	<div id="progress">
    	<div class="bar" style="width: 0%;"></div>
	</div>
</div>

<div id="dropzone" class="fade well">Drop files here</div>

<form id="media-upload-alias-info">
    <input type="hidden" id="alias-id" name="alias-id" value="{{ $alias->getKey() }}">
    <input type="hidden" id="alias-class" name="alias-class" value="{{$alias->getMorphClass() }}">
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="/js/vendor/jquery.ui.widget.js"></script>
<script src="/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.fileupload.js"></script>
<script>
$('#formUpload').fileupload({
 	formData : $('#media-upload-alias-info').serializeArray(),
 
  error: function(response)
  {
    var r = $.parseJSON(response.responseText);
    alert(r.error.message);
  }
 });

</script>
