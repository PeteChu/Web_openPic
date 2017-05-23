@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>ปรับแต่งอัลบั้มของคุณ</h3>
        <button type="bsubmit" class='btn' style='background-color: rgb(244, 143, 69);' id="404" >ลบอัลบั้ม</button>


      </div>

      @php $i = 0; @endphp
      <div class="panel-body">
        <form class="" action="/delete" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}

          @foreach($photos['photo_path'] as $photo)
          <input id="{{$i.'a'}}" type="hidden" name="photos_path[]" value="{{$photo.'@'}}">
          <input id="{{'grid'.$i.'a'}}" type="hidden" name="grid[]" value="{{$photos['grid'][$i]}}">
          <div class="col-md-3" align='center'>
              <div class="col-md-12 thumbnail">
                  <img  src="{{$photo}}"  style='height: 250px; object-fit: container'/><br>
                  <div>
                    <label for="grid">ขนาด Grid : </label>
                    <select id='{{'grid'.$i}}'>
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
        var getId = $(this).attr('id');
        var value = $('#'+getId+'a').attr("value");
        value = value.slice(0,(value.length-1));
        $('#'+getId+'a').val(value);
      $(this).parent().parent().parent().remove();
      }
    });
    $('#404').click(function () {
       if(confirm('คุณต้องการลบรูปทั้งอัลบั้มใช่หรือไม่(อัลบั้มจะหายไป)')){
        var tag = document.getElementsByTagName('input');
        var length = tag.length;
        for (var i = 0; i < tag.length; i++) {
            var str = tag[i].value;
             var len = str.length;
             if(str[len-1]=='@'){
             str = str.slice(0,(len-1));
             tag[i].value = str;
}
        }
         $('.btn-danger').parent().parent().parent().remove();
       }
    })

    $('select').change(function () {
      var getId = $(this).attr('id');

       $('#'+getId+'a').val($(this).find(":selected").attr('value'));

    });



  });

</script>
@stop
