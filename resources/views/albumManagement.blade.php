@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>ปรับแต่งอัลบั้มของคุณ</h3>
      </div>

      @php $i = 0; @endphp
      <div class="panel-body">
        <form class="" action="/delete" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}

          @foreach($photos['photo_path'] as $photo)
          <input id="{{$i.'a'}}" type="hidden" name="photos_path[]" value="{{$photo.'@'}}">
          <div class="col-md-3" align='center'>
              <div class="col-md-12 thumbnail">
                  <img  src="{{$photo}}"  style='height: 250px; object-fit: container'/><br>
                  <div>
                    <label for="grid">ขนาด Grid : </label>
                    <select class="" name="grid[]" id='grid'>
                      <option value="1" @if($photos['grid'][$i]==1) selected @endif>2x2</option>
                      <option value="2"@if($photos['grid'][$i]==2) selected @endif>3x3</option>
                      <option value="3" @if($photos['grid'][$i]==3) selected @endif>3x4</option>
                    </select>
                    <button type="button" class='btn btn-danger' id="{{$i++}}">ลบ</button>
                  </div>
              </div>
          </div>
          @endforeach
          <div class="col-md-12" align='center'>
            <button class='btn btn-success' type="submit" >ยืนยันการเปลี่ยนแปลง</button>
          </div>

        </form>
      </div>
    </div>
  </div>

@stop
@section('script')
<script type="text/javascript">
  $(document).ready(function(){

    $('.btn-danger').click( function () {
 if(confirm('คุณต้องการลบรูปนี้ใช่หรือไม่')){
        var c = $(this).attr('id');
        var value = $('#'+c+'a').attr("value");
        value = value.slice(0,(value.length-1));
        $('#'+c+'a').val(value);
      $(this).parent().parent().parent().remove();
      }
    })

  $('.btn-danger').click(function () {
  //  var src = $(this).attr('id');
//   alert(src);
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
