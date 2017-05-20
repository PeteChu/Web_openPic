@extends('layouts.app')
{{header( "refresh:5;url='/'" )}}

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body" align='center'>
                  <p>You are logged in!</p>
                  <p>You will be redirected in <span id="counter">5</span> second(s).</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script type="text/javascript">
  function countdown() {
    var i = document.getElementById('counter');
    i.innerHTML = parseInt(i.innerHTML)-1;
  }
  setInterval(function(){ countdown(); },1000);
</script>
@stop
