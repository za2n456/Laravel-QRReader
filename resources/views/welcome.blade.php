@extends('layouts.app')
@section('template_title')
    {!! trans('Input Pasien') !!}
@endsection
@section('content')
<div class="container">
  <div class="row">
  <div class="col-lg-12 px-0">

    <qr-scanner></qr-scanner>

  </div>
  </div>
</div>
@endsection
