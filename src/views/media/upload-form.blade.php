
  <!-- Dropzone -->
  <div id="dropzone">
    <p>Drop files here or browse</p>
  		  <input id="formUpload" type="file" name="files" data-url="/media" multiple>
   </div>
  <!-- Form Hidden need value -->
  <form id="media-upload-alias-info">
    <input type="hidden" id="alias-id" name="alias-id" value="{{ $alias->getKey() }}">
    <input type="hidden" id="alias-class" name="alias-class" value="{{$alias->getMorphClass() }}">
  </form>
  
  <!--status message will appear here-->
  <div class="status"></div>



