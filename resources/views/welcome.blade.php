@extends('layouts.app')
@section('template_title')
    {!! trans('Input Pasien') !!}
@endsection
@section('content')
<div class="container">
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex">
        <div class="col-lg-9">
            Input Pasien
        </div>
        <div class="col-lg-3 text-right">
            <a class="btn btn-light btn-sm" href="{{ route('pasien') }}"><i class="fa fa-fw fa-reply-all" aria-hidden="true"></i><span class="hidden-xs"> Back</span></a>
        </div>
    </div>
    <div class="card-body">
      <form action="{{ route('pasien.store') }}" method="POST">
    		@csrf
        <qr-upload></qr-upload>
	     </form>
    </div>
  </div>
</div>
</div>
@endsection
