@extends('layouts.app')
@section('template_title')
    {!! trans('All Plans') !!}
@endsection
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header d-flex">
        <div class="col-lg-9">
            <h3>All Packages</h3>
        </div>
        <div class="col-lg-3 text-right">
            <a class="btn btn-success" href="{{ route('plans.create') }}"><i class="fa fa-plus"></i><span class="hidden-xs"> Create New Package</span></a>
        </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
          <tr>
              <th>No</th>
              <th>Package Name</th>
              <th class="hidden-xs">Description</th>
              <th>Price</th>
              <th width="">Action</th>
          </tr>
          @php
              $i = 0;
          @endphp
          @foreach ($plans as $plan)
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $plan->plan_name }}</td>
                  <td class="hidden-xs">{!! $plan->description !!}</td>
                  <td>{{ $plan->price }}</td>
                  <td>
                      <form action="{{ route('plans.destroy',$plan->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary" href="{{ route('plans.edit',$plan->id) }}"><i class="fa fa-pencil"></i><span class="hidden-xs"> Edit</span></a>
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
