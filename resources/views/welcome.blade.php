@extends('layouts.app')
@section('template_title')
    {!! trans('Input Pasien') !!}
@endsection
@section('content')
<div class="container">
  <div class="row">

    <qr-scanner></qr-scanner>

  </div>
</div>
@endsection
