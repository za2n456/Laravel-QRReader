<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Models\User;
use App\Plan;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('pages.invoices.list', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['plans'] = Plan::all();
		$data['users'] = User::all();
        return view('pages.invoices.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'user_id' => 'required',
            'plan_id' => 'required',
			'payment_method' => 'required',
			'status' => 'required',
        ]);
		
		$plan = Plan::find($request->plan_id);
		
		Invoice::create(array('user_id' => $request->user_id, 'plan_id' => $request->plan_id, 'total' => $plan->price,'payment_method' => $request->payment_method, 'note' => $request->note, 'status' => $request->status));
		return redirect('manage/invoices')->with('success', 'Invoice has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
         return redirect('manage/invoices')->with('success', 'Invoice deleted successfully');
    }
}
