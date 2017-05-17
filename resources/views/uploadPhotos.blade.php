@extends('layouts.app')

@section('headScript')
  <link href="bootstrap-fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
@stop

@section('content')

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading"><h3>อัพโหลดไฟล์</h3></div>
      <div class="panel-body">
        @if (count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        @endif

        <form action="/upload" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-md-12">
            <div class="col-md-10 col-md-offset-1">
              <label>ชื่ออัลบั้ม</label>
              <input type="text" class='form-control' name="albumName" />
              <input type="text" name="username" value="{{ Auth::user()->name }}" hidden>
              <br /><br />
              <input id="input-id" type="file" name="photos[]" multiple data-preview-file-type="text" >
            </div>

          </div>

        </form>
      </div>
    </div>
  </div>
</div>

@stop


@section('script')

  <script src='{{asset('bootstrap-fileinput/js/fileinput.js')}}'></script>

  <script>
    $(document).ready( function() {
      $('#input-id').fileinput({
        'required': true,
        'allowedFileExtensions':['jpg','bmp','png'],
        'maxFileSize': 5120,
        'maxFileCount': 24
      });
    });
  </script>

@stop
