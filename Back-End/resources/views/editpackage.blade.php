@extends('master.db_master')

@section('dynblock')
<body>

<div class="container mt-3">
  <h2  style="text-align:center;">Edit Package</h2>
  <p>This is the place where admin Edit Tour Package of the admin page:</p>
  <div class="container-fluid py-6 ">
        <div class="d-flex align-items-center justify-content-center" style="min-height: 30vh; margin-top: 50px;">
            <div class="form-container">
                <h3 class="title">Edit Tour</h3>
                <form class="form-horizontal" method="Post" action="{{url('up-data/'.$tour->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input name="country" type="text" value="{{ $tour->country}}" class="form-control" placeholder="Country">
                    </div>
                    <div class="form-group">
                        <input name="day" type="number" value="{{ $tour->day}}" class="form-control" placeholder="Day">
                    </div>
                    <div class="form-group">
                        <input name="description" type="text"value="{{ $tour->description}}" class="form-control" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <input name="price" type="integer" value="{{ $tour->price}}" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input name="photo_url" type="hidden" value="{{ $tour->photo_url}}" class="form-control" placeholder="Picture" id="photo_url">
                    </div>
                    <div class="my-2">
                        <input type="hidden" role="uploadcare-uploader" name ="photo" id="photo-uploader" />
                    </div>
                    <button type="submit" class="btn btn-default"> Update </button>
                </form>
            </div>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
//   import * as LR from "https://esm.sh/@uploadcare/blocks@0.22.13/web/file-uploader-regular.min.js";

//   LR.registerBlocks(LR);
var widget = uploadcare.Widget('[role=uploadcare-uploader]');
widget.onUploadComplete(function(fileInfo) {
  var fileUrl = fileInfo.cdnUrl;
  // Handle the uploaded file URL (e.g., submit to a database)
//   console.log('File URL:', fileUrl);
  var photoURLInput = document.getElementById('photo_url');
  photoURLInput.value = fileUrl;

});
</script>


</body>

</html>
@stop