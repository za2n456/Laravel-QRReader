@extends('layouts.app')
@section('template_title')
    {!! trans('Input Pasien') !!}
@endsection
@section('content')
<div class="container">
<div class="col-lg-10 offset-lg-1">
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
      <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="nama" id="nama" class="form-control" :value="nama" placeholder="Nama">
        </div>
      </div>
      <div class="form-group row">
        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-10">
          <input type="text" name="nik" id="nik" class="form-control" :value="nik" placeholder="NIK">
        </div>
      </div>
      <div class="form-group row">
        <label for="nrm" class="col-sm-2 col-form-label">No. Rekam Medis</label>
        <div class="col-sm-10">
          <input type="text" name="nrm" id="nrm" class="form-control" :value="nrm" placeholder="No. Rekam Medis">
        </div>
      </div>
      <div class="form-group row">
        <label for="kl" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
          <input type="text" name="kl" id="kl" class="form-control" :value="kl" placeholder="Tempat Lahir">
        </div>
      </div>
      <div class="form-group row">
        <label for="tl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="text" name="tl" id="tl" class="form-control" :value="tl" placeholder="Tanggal Lahir">
        </div>
      </div>
      <div class="form-group row">
        <label for="add" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <textarea type="text" name="add" id="add" class="form-control" placeholder="Alamat"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="wa" class="col-sm-2 col-form-label">Whatsapp</label>
        <div class="col-sm-10">
          <input type="text" name="wa" id="wa" class="form-control" :value="wa" placeholder="Whatsapp">
        </div>
      </div>
      <div class="form-group row">
        <label for="cp" class="col-sm-2 col-form-label">No. HP</label>
        <div class="col-sm-10">
          <input type="text" name="cp" id="cp" class="form-control" :value="cp" placeholder="No. HP">
        </div>
      </div>
      <div class="form-group row">
        <label for="py1" class="col-sm-2 col-form-label">Payment 1</label>
        <div class="col-sm-10">
          <input type="text" name="py1" id="py1" class="form-control" :value="py1" placeholder="Payment 1">
        </div>
      </div>
      <div class="form-group row">
        <label for="py2" class="col-sm-2 col-form-label">Payment 2</label>
        <div class="col-sm-10">
          <input type="text" name="py2" id="py2" class="form-control" :value="py2" placeholder="Payment 2">
        </div>
      </div>
      <div class="form-group row">
        <label for="da" class="col-sm-2 col-form-label">Alergi Obat</label>
        <div class="col-sm-10">
          <input type="text" name="da" id="da" class="form-control" :value="da" placeholder="Alergi Obat">
        </div>
      </div>
      <div class="form-group row">
        <label for="fa" class="col-sm-2 col-form-label">Alergi Makanan</label>
        <div class="col-sm-10">
          <input type="text" name="fa" id="fa" class="form-control" :value="fa" placeholder="Alergi Makanan">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-12">
          <button type="submit" class="btn btn-block rounded-pill btn-primary">Submit</button>
        </div>
      </div>
	  </form>
    </div>
  </div>
</div>
</div>
@endsection
