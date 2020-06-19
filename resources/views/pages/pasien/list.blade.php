@extends('layouts.app')
@section('template_title')
    {!! trans('Data Pasien') !!}
@endsection
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header d-flex">
        <div class="col-lg-9">
            <h4>Data Pasien</h4>
        </div>
        <div class="col-lg-3 text-right">
            <a class="btn btn-sm btn-success" href="{{ route('pasien.create') }}"><i class="fa fa-plus"></i><span class="hidden-xs"> Input Pasien</span></a>
        </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIK</th>
              <th>No. Rekam Medis</th>
              <th width="">Action</th>
          </tr>
          @php
              $i = 0;
          @endphp
          @foreach ($pasiens as $pasien)
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $pasien->nama }}</td>
                  <td>{{ $pasien->nik }}</td>
                  <td>{{ $pasien->nrm }}</td>
                  <td>
                      <form action="{{ route('pasien.destroy',$pasien->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary" href="{{ route('pasien.edit',$pasien->id) }}"><i class="fa fa-pencil"></i><span class="hidden-xs"> Edit</span></a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i><span class="hidden-xs"> Delete</span></button>
                      </form>
                  </td>
              </tr>
          @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
