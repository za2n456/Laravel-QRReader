<?php

namespace App\Http\Controllers;

use App\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pasiens = Plan::all();
        return view('pages.pasien.list', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pasien.create');
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
            'nama'=>'required',
            'nik'=> 'required|unique:pasiens',
            'nrm' => 'required',
            'kl' => 'required',
            'tl' => 'required',
            'add' => 'required',
            'wa' => 'required',
            'cp' => 'required',
            'py1' => 'required',
            'py2' => 'required',
            'da' => 'required',
            'fa' => 'required',
        ]);

        $pasien = new Pasien([
            'nama' => $request->get('nama'),
            'nik'=> $request->get('nik'),
            'nrm'=> $request->get('nrm'),
            'kl'=> $request->get('kl'),
            'tl'=> $request->get('tl'),
            'add'=> $request->get('add'),
            'wa'=> $request->get('wa'),
            'cp'=> $request->get('cp'),
            'py1'=> $request->get('py1'),
            'py2'=> $request->get('py2'),
            'da'=> $request->get('da'),
            'fa'=> $request->get('fa'),
        ]);

        $pasien->save();
        //return redirect('/pasien')->with('success', 'Pasien berhasil ditambahkan');
        response()->json(['success'=>'Pasien berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('pages.pasien.edit',compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'plan_name'=>'required',
            'description'=> 'required',
            'price' => 'required'
        ]);


        $pasien = Pasen::find($id);
        $pasien->plan_name = $request->get('plan_name');
        $pasien->description = $request->get('description');
        $pasien->price = $request->get('price');

        $pasien->update();

        return redirect('/pasien')->with('success', 'Pasien berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect('/pasien')->with('success', 'Pasien berhasil dihapus');
    }
}
