@extends('layouts.userorder')
@section('template_title')
    {!! trans('Create New Invoice') !!}
@endsection
@section('content')
    <div class="container">
	  <div class="row mt-4 mb-4">
		<ul class="list-inline">
			<li class="list-inline-item"><h4>Checkout ></h4></li>
			<li class="list-inline-item"><h5 class="text-muted">Payment Confirmation<h5></li>
		</ul>
	   </div>
	  <form class="md-form" action="{{ route('post-invoice') }}" method="POST">
		@csrf
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Detail Order</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
              </div>
              <span class="text-muted">IDR Price</span>
            </li>
            <li class="form-group list-group-item d-flex justify-content-between lh-condensed">
              <div>
				<input type="hidden" name="plan_id" id="plan_id" class="form-control" value="{{$order->id}}">{{$order->plan_name}}</input>
				<ol class="text-muted">
				<li style="list-style-type:none;">{!!$order->description!!}</li>
                </ol>
              </div>
              <span class="text-muted">{{$order->price}}</span>
            </li>
            <li class="form-group list-group-item d-flex justify-content-between">
              <span>Sub Total</span>
              <strong>{{$order->price}}</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <strong>TOTAL</strong>
			  <input type="text" name="price" class="form-control col-md-3" style="text-align:right;" value="{{$order->price}}">
            </li>
          </ul>
		  <hr class="mb-4">
            

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Personal Information</h4>
			<div class="my-0">
				<div class="row">
				  <div class="form-group col-md-6 mb-3">
					<input type="hidden" class="form-control" id="user_name" placeholder="User Name" aria-label="User Name" name="user_id" value="{{(Auth()->user()->id)}}">
					<input type="text" class="form-control" id="user_name" placeholder="User Name" aria-label="User Name" value="{{(Auth()->user()->name)}}" readonly>
				  </div>
				  <div class="col-md-6 mb-3">
					<input type="text" class="form-control" id="user_email" placeholder="Email" aria-label="Email" value="{{(Auth()->user()->email)}}">
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-6 mb-3">
					<input type="text" class="form-control" id="Instansi" placeholder="Instansi" aria-label="Instansi" value="">
				  </div>
				  <div class="col-md-6 mb-3">
					<input type="text" class="form-control" id="Phone" placeholder="Phone" aria-label="Phone" value="">
				  </div>
				</div>

				<hr class="mb-4">
				<h4 class="mb-3">Payment Method</h4>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="transferbank-tab" data-toggle="tab" href="#transferbank" role="tab"
						aria-selected="true">Transfer Bank</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="creditcard-tab" data-toggle="tab" href="#creditcard" role="tab" 
						aria-selected="false">Credit Card</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="transferbank" role="tabpanel">
						<div class="form-group custom-control custom-checkbox mb-3">
							<input type="checkbox" id="payment_method" class="custom-control-input mr-9" name="payment_method" value="Transfer Bank">
							<label class="custom-control-label" for="payment_method">Transfer Bank</label>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h6>Nomor Rekening: xxxx-xxxx-xxxx</h6>
							</div>
							<div class="col-sm-6">
								<h6>A/N: xxxx-xxxx-xxxx</h6>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="creditcard" role="tabpanel">
						<div class="row">
							<div class="col-md-6 mb-3">
								<input type="text" class="form-control" id="cc-name" placeholder="Name on card" aria-label="Name on card">
								<small class="text-muted">Full name as displayed on card</small>
								<div class="invalid-feedback">
								  Name on card is required
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" class="form-control" id="cc-number" placeholder="Credit card number" aria-label="Credit card number">
								<div class="invalid-feedback">
								  Credit card number is required
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 mb-3">
								<input type="text" class="form-control" id="cc-expiration" placeholder="Expiration" aria-label="Expiration">
								<div class="invalid-feedback">
								  Expiration date required
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<input type="text" class="form-control" id="cc-cvv" placeholder="CVV" aria-label="CVV">
								<div class="invalid-feedback">
								  Security code required
								</div>
							</div>
						</div>
					</div>
				</div>
            
				<hr class="mb-4">
				<button class="btn btn-success btn-lg btn-block" type="submit">Continue to checkout</button>
				<div class="mt-4 text-center align-items-center ">
				<a href="#">Back to Membership</a>
				</div>
			</div>
        </div>
      </div>
	  </form>
	
	  
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
	@endsection
