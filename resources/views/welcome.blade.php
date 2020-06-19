@extends('layouts.app')
@section('template_title')
    {!! trans('Input Pasien') !!}
@endsection
@section('content')
<div class="container">
  <div class="row">
  <div class="col-lg-12">
    <div class="cards">
      <div class="card-body">
        <form action="{{ route('pasien.store') }}" method="POST">
      		@csrf
          <qr-scanner></qr-scanner>
  	     </form>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection
