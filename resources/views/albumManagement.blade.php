@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>ปรับแต่งอัลบั้มของคุณ</h3>
      </div>
      @php $i = 0 @endphp

      <div class="panel-body">
        @foreach($photos['photo_path'] as $photo )
        <from >
        <div class="col-md-3 thumbnail" align='center'>
            <img src="{{$photo}}" id = "{{$i}}" style='height: 100%; width: 100%; object-fit: contain'/>
            <h1>{{$photos['grid'][$i++]}}</h1>
          </div>
        </from>
        @endforeach
      </div>

    </div>

  </div>


@stop
@section('script')
<script type="text/javascript">
  $(document).ready(function(){

  $('from').click(function () {
    var src = $(this).children().children().attr('src');


//     $.ajax({
//       type: "POST",
//       url: "./delete/"+src,
//
// });
  // $(this).remove();
  });

  });

</script>
@stop
