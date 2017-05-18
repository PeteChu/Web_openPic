@extends('layouts.app')

@section('content')


<div class="col-md-12 ">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3>ยินดีต้อนรับ</h3></div>
<div class="panel-body">
      @foreach ($path_photo[0] as $name)
        <div class="col-md-3">
          <img src="{{$path_photo[$name][0]}}" style='height: 100%; width: 100%; object-fit: contain'/><br><p align = "center">{{$name}}</p>
      </div>

      @endforeach

    </div>
  </div>
</div>
@stop
