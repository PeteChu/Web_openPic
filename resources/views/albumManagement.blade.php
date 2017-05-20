@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>ปรับแต่งอัลบั้มของคุณ</h3>
      </div>
      @php $i = 0 @endphp
      <div class="panel-body">
        @foreach($photos as $photo)
        <div class="col-md-3 thumbnail" align='center'>
            <img src="{{$photo}}" id = "{{$i=$i+1}}" style='height: 100%; width: 100%; object-fit: contain'/>
          </div>
        @endforeach
      </div>

    </div>

  </div>
@stop
