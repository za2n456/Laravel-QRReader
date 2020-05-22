<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

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
         return view('pages.plans.list', compact('plans','plans'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         return view('plan.create');
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
             'txtFirstName'=>'required',
             'txtLastName'=> 'required',
             'txtAddress' => 'required'
         ]);

         $plan = new Plan([
             'first_name' => $request->get('txtFirstName'),
             'last_name'=> $request->get('txtLastName'),
             'address'=> $request->get('txtAddress')
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
         return view('plan.view',compact('plan'));
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
         return view('plan.edit',compact('plan'));
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
             'txtFirstName'=>'required',
             'txtLastName'=> 'required',
             'txtAddress' => 'required'
         ]);


         $plan = Plan::find($id);
         $plan->first_name = $request->get('txtFirstName');
         $plan->last_name = $request->get('txtLastName');
         $plan->address = $request->get('txtAddress');

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
}
