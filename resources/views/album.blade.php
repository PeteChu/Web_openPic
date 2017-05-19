@extends('layouts.app')

@section('content')


<div class="col-md-12 ">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3>ยินดีต้อนรับ</h3>
    </div>
<div class="panel-body">
    @php
    $no = 0;
    @endphp
     @if(count($path_photo)>0)
      @foreach ($path_photo[0] as $name)

        <div class="col-md-3 thumbnail" align='center'>
          <img src="{{$path_photo[$name][0]}}" style='height: 100%; width: 100%; object-fit: contain'/>
          <label>ชื่ออัลบั้ม: {{$name}}</label><br>
          <a href = "/play/{{$name}}/{{$no}}" class='btn btn-success'>เล่น</a>
          <a href = "/play/{{$name}}/{{$no}}" class='btn btn-success'>จัดการอัลบั้ม</a>
        </div>

      @endforeach
      @else
        <h1>ไม่มีรูปภาพโว๊ยยยยยย</h1>
      @endif
    </div>
  </div>
</div>
@stop

@section('style')

@stop
