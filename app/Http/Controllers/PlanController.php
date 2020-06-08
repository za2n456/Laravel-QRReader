<?php

namespace App\Http\Controllers;

use App\Plan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         //
         $plans = Plan::all();
         return view('pages.plans.list', compact('plans'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         return view('pages.plans.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
         $request->validate([
             'plan_name'=>'required',
             'description'=> 'required',
             'price' => 'required'
         ]);

         $plan = new Plan([
             'plan_name' => $request->get('plan_name'),
             'description'=> $request->get('description'),
             'price'=> $request->get('price')
         ]);

         $plan->save();
         return redirect('/plans')->with('success', 'Plan has been added');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Plan  $plan
      * @return \Illuminate\Http\Response
      */
     public function show(Plan $plan)
     {
         //
         return view('pages.plans.view',compact('plan'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Plan  $plan
      * @return \Illuminate\Http\Response
      */
     public function edit(Plan $plan)
     {
         //
         return view('pages.plans.edit',compact('plan'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Plan  $plan
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request,$id)
     {
         //

         $request->validate([
             'plan_name'=>'required',
             'description'=> 'required',
             'price' => 'required'
         ]);


         $plan = Plan::find($id);
         $plan->plan_name = $request->get('plan_name');
         $plan->description = $request->get('description');
         $plan->price = $request->get('price');

         $plan->update();

         return redirect('/plans')->with('success', 'Plan updated successfully');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Plan  $plan
      * @return \Illuminate\Http\Response
      */
     public function destroy(Plan $plan)
     {
         //
         $plan->delete();
         return redirect('/plans')->with('success', 'Plan deleted successfully');
     }
	 
	 public function orderplan($id){
		$order = Plan::find($id);
		$user = Auth::user();
		
        if(Auth::guest()){
        return Redirect::guest("login")->withSuccess('You have to login first');
      }
        return view('pages.plans.order', $order, compact('order'));
	 }
}
