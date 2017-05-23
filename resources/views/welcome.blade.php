@extends('layouts.app')
@if(Auth::user())
  @section('content')
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>ยินดีต้อนรับ, คุณ {{ Auth::user()->name }}</h3>
      </div>
      <div class="panel-body">
        @component('layouts.components.webinfo')

        @endcomponent

        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Quick Play</h4>
            </div>
            <div class="panel-body">

               @foreach ($path_photo[0] as $name)

                 <div class="col-md-3 " align='center'>
                   <div class="col-md-12 thumbnail">
                     <img src="{{$path_photo[$name][0]}}" style='height: 250px; object-fit: container'/>
                     <label>ชื่ออัลบั้ม: {{$name}}</label><br>
                     <a href = "/play/{{$name}}/{{0}}" class='btn btn-success'>เล่น</a>
                     <a href = "/albummanage/{{$name}}" class='btn btn-success'>จัดการอัลบั้ม</a>
                   </div>
                 </div>

               @endforeach
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
  @stop
@else

@section('content')
  @component('layouts.components.webinfo')

  @endcomponent

@stop

@endif
