<div class="row">
	@include('media::media.upload-form',['alias'=>$alias])
	<hr />
   <div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
       <span class="bitrate"></span>
       <span class="percent"></span>
      <span class="sr-only">0% Complete (success)</span>
    </div>
  </div>
  <hr />
	@include('media::media.model-file-list',['alias'=>$alias])
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/vendor/jquery.ui.widget.js"></script>

<script src="/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.fileupload.js"></script>
<script src="/js/jquery.fileupload-process.js"></script>

<script>

  // var percent = $('.percent');
  // var bar = $('.bar');
  var progressbar = $('.progress .progress-bar');

  $('#formUpload').fileupload({
   formData : $('#media-upload-alias-info').serializeArray(),
   dropZone: $('#dropzone'),
     complete: function(data){
        $file_img = $.parseJSON(data.responseText);
        $('#media-list tr.media-th:first').after($file_img.template);
        progressbar.css('width',0+'%').attr('aria-valuenow',0);
        $('.percent').text('');
        $('.bitrate').text('');
     },
     error: function(response){
        var r = $.parseJSON(response.responseText);
        alert(r.error.message);
     }
    }).bind('fileuploadprogress',function(e, data){
       var progress = parseInt(data.loaded / data.total * 100, 10);
        progressbar.css('width',progress + '%').attr('aria-valuenow',progress);
        kps = Math.floor(data.bitrate/1000);
        $('.percent').text(progress+ "%");
        $('.bitrate').text(kps+" ko/s");
    });


$(document).bind('dragover', function (e) {
    var dropZone = $('#dropzone'),
        timeout = window.dropZoneTimeout;
    if (!timeout) {
        dropZone.addClass('in');
    } else {
        clearTimeout(timeout);
    }
    var found = false,
        node = e.target;
    do {
        if (node === dropZone[0]) {
            found = true;
            break;
        }
        node = node.parentNode;
    } while (node != null);
    if (found) {
        dropZone.addClass('hover');
    } else {
        dropZone.removeClass('hover');
    }
    window.dropZoneTimeout = setTimeout(function () {
        window.dropZoneTimeout = null;
        dropZone.removeClass('in hover');
    }, 100);
});
</script>
