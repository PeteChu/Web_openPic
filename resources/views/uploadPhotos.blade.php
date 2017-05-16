@extends('layouts.app')

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
          ชื่ออัลบั้ม
          <input type="text" name="albumName" />
          <input type="text" name="username" value="{{Auth::user()->name}}" hidden>
          <br /><br />
          <input type="file" name="photos[]" multiple />
          <br /><br />
          <input type="submit" value="Upload" />
        </form>

      </div>
    </div>
  </div>
</div>

@stop
