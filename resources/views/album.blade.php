@extends('layouts.app')

@section('content')


<div class="col-md-12 ">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3>อัลบั้มของคุณ</h3>
    </div>
    <div class="panel-body">
      @php
      $no = 0;
      @endphp
       @if(count($path_photo)>0)
        @foreach ($path_photo[0] as $name)

          <div class="col-md-3 " align='center'>
            <div class="col-md-12 thumbnail">
              <img src="{{$path_photo[$name][0]}}" style='height: 250px; object-fit: container'/>
              <label>ชื่ออัลบั้ม: {{$name}}</label><br>
              <a href = "/play/{{$name}}/{{$no}}" class='btn btn-success'>เล่น</a>
              <a href = "/albummanage/{{$name}}" class='btn btn-success'>จัดการอัลบั้ม</a>
            </div>
          </div>

        @endforeach
        @else
          <div class="" align='center'>
            <h4>ไม่มีอัลบั้ม กรุณาอัพโหลดรูปภาพเพื่อสร้างอัลบั้ม</h4>
          </div>
        @endif
    </div>
  </div>
</div>

@if(isset($message))
<div class="col-md-12">
  <div class='alert alert-success'>
    {{$message}}
  </div>
</div>
@endif

@stop


@section('style')

@stop
