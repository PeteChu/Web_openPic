@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="/css/grid.css">
@stop

@section('content')

  @if($grid == '1')
    <twobytwo></twobytwo>
  @elseif($grid == '2')
    <threebythree></threebythree>
  @elseif($grid == '3')
    <threebyfour></threebyfour>
  @endif

@stop

@section('script')

  <!-- <script src="{{ asset('js/test.js') }}"></script> -->

  <script type="text/javascript">
    $(document).ready(function () {
      //670505
      var image = new Image();
      image.onload = function () {
        $('table').css('width', this.width)
                  .css('height', this.height);
      }
      image.src = "/storage/photos/{{$album}}/{{$pName}}.jpg";



      $('table').css('background','URL('+image.src+')')
                .css('background-repeat','no-repeat')
                .css('background-size','cover');
    })

  </script>
@stop
