<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bidang;

class BidangController extends Controller
{
    
    public function index()
    {
        $bidang = Bidang::all();
        return view('bidang.index', compact('bidang'));
    }

    
    public function create()
    {
        return view('bidang.create');
    }

    
    public function store(Request $request)
    {
        $request->validate(['nama_bidang' => 'required|string']);

        Bidang::create([
            'nama_bidang' => $request->nama_bidang,
            'label' => $request->label,
        ]);

        return redirect()->route('bidang.index')->with('success', 'Success');
    }

    
    public function show(Bidang $bidang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidang $bidang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bidang $bidang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bidang  $bidang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bidang $bidang)
    {
        //
    }
}
