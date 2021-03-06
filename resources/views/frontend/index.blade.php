@extends('layouts.frontend')
@section('template_title')
    {!! trans('Homepage') !!}
@endsection
@section('content')

    <!--<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="card-deck mb-3 text-center">
      @foreach ($plans as $plan)
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">{{$plan->plan_name}}</h4>
        </div>
        <div class="card-body">
          <div class="h1 card-title pricing-card-title">{{$plan->price}}</div>
          {!!$plan->description!!}
          <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('select.plan', ['plan' => $plan->id])}}">Sign up Now</a>
        </div>
      </div>
      @endforeach

    </div>-->
	<div class="row">
			@foreach ($plans as $plan)
	<div class="col-md-4 col-sm-4 col-xs-12">
		<form action="{{ route('order',$plan->id) }}">
        <div class="pri_table_list">
			<h3 class="my-0">{{$plan->plan_name}}<br/> <span>{{$plan->price}}</span></h3>
			<ol>
			<li>{!!$plan->description!!}</li>
			</ol>
			<button type="submit">Book now</button></a>	
		</div>
		</form>
	</div>
			@endforeach
	</div>

@endsection
