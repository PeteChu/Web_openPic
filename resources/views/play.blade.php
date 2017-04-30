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
  <script src="{{ asset('js/test.js') }}"></script>
@stop
