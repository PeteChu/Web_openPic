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

   <div align='center'>
     <br>
    @if(($no-1)>=0)
    <a href=" /play/{{$path[$len-1]}}/{{$no-1}} "><button class="btn btn-success" type="button" name="button">รูปก่อนหน้า</button></a>
    @else
    <button class="btn btn-success" type="button" name="button" id='previous'>รูปก่อนหน้า</button>
    @endif
    <button class="btn btn-success" type="button" name="button" id='answer'>เฉลย</button>
    @if(($no+1)<$len-1)
    <a href=" /play/{{$path[$len-1]}}/{{$no+1}} "><button class="btn btn-success" type="button" name="button">รูปต่อไป</button></a>
    @else
    <button class="btn btn-success" type="button" name="button" id='forward'>รูปต่อไป</button>
    @endif
   </div>


 @stop

@section('script')
  <script >
  //var array = JSON.parse({{ json_encode($path)}});

  var image = new Image();

    $(document).ready(function () {

      var image = new Image();
      image.onload = function () {
        $('table').css('width', this.width)
                  .css('height', this.height);
      }

      image.src = "{{$path[$no]['photo_path']}}";
      $('table').css('background','URL('+image.src+')')
                .css('background-repeat','no-repeat')
                .css('background-size','cover');

      $('td').click(function () {
        $(this).css('visibility', 'hidden');
      })

      $('#answer').click(function () {
        $('td').css('visibility', 'hidden');
      })

      $('#previous').click(function () {
        alert('ไม่สามารถกลับไปรูปก่อนหน้าได้ เนื่องจากไม่มีรูป.');
      })

      $('#forward').click(function () {
        alert('ไม่สามารถไปรูปต่อไปได้ เนื่องจากไม่มีรูป.');
      })

    });
  </script>
@stop
