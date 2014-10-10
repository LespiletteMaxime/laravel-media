<div class="row">
	@include('media::media.upload-form',['alias'=>$alias])
	<hr />
	@include('media::media.model-file-list',['alias'=>$alias])
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/vendor/jquery.ui.widget.js"></script>
<script src="/js/jquery.iframe-transport.js"></script>
<script src="/js/jquery.fileupload.js"></script>
<script>
  var percent = $('.percent');
  var bar = $('.bar');

  $('#formUpload').fileupload({
 	  formData : $('#media-upload-alias-info').serializeArray(),
    dropZone: $('#dropzone'),
    apc: true,
    complete: function(data) {
        $file_img = $.parseJSON(data.responseText);

        //  $('<img/>').attr('src', $file_img.file).appendTo('#media-list');
        $('#media-list').append($file_img.template);
      },
      error: function(response)
      {
        var r = $.parseJSON(response.responseText);
        alert(r.error.message);
      }
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
