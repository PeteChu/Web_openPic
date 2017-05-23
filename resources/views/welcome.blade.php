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
