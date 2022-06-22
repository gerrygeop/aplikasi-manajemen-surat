<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\SifatSurat;

class SifatSuratController extends Controller
{

    public function index()
    {
        $sifat_surat = SifatSurat::all();
        return view('sifatsurat.index', compact('sifat_surat'));
    }


    public function create()
    {
        return view('sifatsurat.create');
    }


    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string']);

        SifatSurat::create([
            'name' => $request->name,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('sifatsurat.index')->with('success', 'Success');
    }


    public function show(SifatSurat $sifat_surat)
    {
        //
    }


    public function edit($id)
    {
        $sifat_surat = SifatSurat::findOrFail($id);
        return view('sifatsurat.edit', compact('sifat_surat'));
    }


    public function update(Request $request, $id)
    {
        $sifat_surat = SifatSurat::findOrFail($id);
        
        $request->validate(['name' => 'required|string']);

        $sifat_surat->update([
            'name' => $request->name,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('sifatsurat.index')->with('success', 'Success');
    }


    public function destroy($id)
    {
        $sifat_surat = SifatSurat::findOrFail($id);
        $sifat_surat->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus');
    }
}
