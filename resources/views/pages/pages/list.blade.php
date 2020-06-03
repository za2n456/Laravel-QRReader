@extends('layouts.app')
@section('template_title')
    {!! trans('All Pages') !!}
@endsection
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header d-flex">
        <div class="col-lg-9">
            <h3>All Pages</h3>
        </div>
        <div class="col-lg-3 text-right">
            <a class="btn btn-success" href="{{ route('pages.create') }}"><i class="fa fa-plus"></i><span class="hidden-xs"> Create New Page</span></a>
        </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
          <tr>
              <th>No</th>
              <th>Title</th>
              <th class="hidden-xs">Content</th>
              <th width="">Action</th>
          </tr>
          @php
              $i = 0;
          @endphp
          @foreach ($pages as $page)
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $page->title }}</td>
                  <td class="hidden-xs">{!! $page->content !!}</td>
                  <td>
                      <form action="{{ route('pages.destroy',$page->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary" href="{{ route('pagebuilder.build',$page->id) }}"><i class="fa fa-pencil"></i><span class="hidden-xs"> Edit</span></a>
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
