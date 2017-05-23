@extends('layouts.app')

@section('headScript')
  <link href="bootstrap-fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
@stop

@section('content')

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading"><h3>อัพโหลดไฟล์</h3></div>
      <div class="panel-body">

        <form action="/upload" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-md-12">
            <div class="col-md-10 col-md-offset-1">
              <label>ชื่ออัลบั้ม</label>
              <input type="text" class='form-control' name="albumName" />
              <input type="text" name="username" value="{{ Auth::user()->name }}" hidden>
              <br />
              <p style="color: red;">*รูปภาพที่มีขนาดมากกว่า 1024 x 768 จะถูกลดขนาดลงเหลือ 1024 x 768</p>
              <input id="input-id" type="file" name="photos[]" multiple data-preview-file-type="text" >
            </div>
          </div>
        </form>
        </form>
      </div>
    </div>
  </div>
</div>
  @if(isset($success))
  <div class='alert alert-success'>
    {{$success}}
  </div>
  @endif

  @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
      </div>
    @endforeach
  @endif
@stop


@section('script')
  <script src='{{ asset('bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') }}'></script>
  <script src='{{ asset('bootstrap-fileinput/js/fileinput.js') }}'></script>

  <script>
    $(document).ready( function() {
      $('#input-id').fileinput({
        allowedFileExtensions:['jpg','bmp','png'],
        maxFileSize: 5000,
      });
    });
  </script>

@stop
