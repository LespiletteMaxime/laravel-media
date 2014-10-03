<style>
#dropzone {
    background: palegreen;
    width: 150px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    font-weight: bold;
}
#dropzone.in {
    width: 600px;
    height: 200px;
    line-height: 200px;
    font-size: larger;
}
#dropzone.hover {
    background: lawngreen;
}
#dropzone.fade {
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    opacity: 1;
}
</style>
<div class="row">
	<div class="form-group">
		<input id="formUpload" type="file" name="files" data-url="/media" multiple>
	</div>
	<div id="progress">
    	<div class="bar" style="width: 0%;"></div>
	</div>
</div><div id="dropzone" class="fade well">Drop files here</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="/js/vendor/jquery.ui.widget.js"></script>
<script src="/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.fileupload.js"></script>
<script>
  $('#formUpload').fileupload();
</script>
