@extends('layouts.userorder')
@section('template_title')
    {!! trans('Create New Invoice') !!}
@endsection
@section('content')
    <div class="container">
	  <div class="row mt-4 mb-4">
		<ul class="list-inline">
			<li class="list-inline-item"><h5 class="text-muted">Checkout ></h5></li>
			<li class="list-inline-item"><h4>Payment Confirmation<h4></li>
		</ul>
	   </div>
	   <div class="row">
        <div class="col-md-12 mb-4">
	    <h4 class="d-flex justify-content-between align-items-left mb-3">
			<span class="text-muted">Invoice {{$invoice->id}}</span>
        </h4>
		<hr class="mb-4">
		<ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0" style="text-align: center;">Waiting for Payment</h6>
              </div>
            </li>
            <li class="form-group list-group-item d-flex justify-content-between lh-condensed">
              <div>
				<h6 class="my-0">Amount</h6>
				<span class="text-muted">{{$invoice->total}}</span>
              </div>
            </li>
            <li class="form-group list-group-item d-flex justify-content-between">
			  <div>
				<h6 class="my-0">Before</h6>
				<span>{{ date('d M Y H:i:s', strtotime("+1 day", strtotime($invoice->created_at))) }} </span>
			  </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span class="text-danger">Please pay and confirm with expire time! Otherwise this request will be cancelled automatically.</span>
            </li>
        </ul>
		</div>
		</div>
	</div>
	   
	   
@endsection   