@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="/css/grid.css">
@stop
@php
   $len = count($path);
@endphp

 @section('content')

   @if($path[$no]['grid'] == '1')
     <twobytwo></twobytwo>
   @elseif($path[$no]['grid'] == '2')
     <threebythree></threebythree>
   @elseif($path[$no]['grid'] == '3')
     <threebyfour></threebyfour>
   @endif



 @stop

@section('script')
  <script >
  //var array = JSON.parse({{ json_encode($path)}});

  var image = new Image();

    $(document).ready(function () {
      //670505
      var image = new Image();
      image.onload = function () {
        $('table').css('width', this.width)
                  .css('height', this.height);
      }

      image.src = "{{$path[$no]['photo_path']}}";
      $('table').css('background','URL('+image.src+')')
                .css('background-repeat','no-repeat')
                .css('background-size','cover');
    });
  </script>
@stop
