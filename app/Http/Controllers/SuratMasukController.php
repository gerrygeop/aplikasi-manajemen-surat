<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use RealRashid\SweetAlert\Facades\Alert;

use App\SuratMasuk;
use App\SifatSurat;
use App\User;

class SuratMasukController extends Controller
{
    
    public function index()
    {
        $surat_masuk = SuratMasuk::all()->sortByDesc('created_at');
        // ->where('user_id', auth()->id())->sortByDesc('created_at');
        // $suratAdmin = SuratMasuk::all();
        return view('surat_masuk.index', compact('surat_masuk'));
    }

   
    public function create()
    {
        $sifat_surat = SifatSurat::all();
        // $recipients = User::where('id', '!=', 1)->get()->except(auth()->id());

        return view('surat_masuk.create', compact('sifat_surat'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'asal_surat'        => ['required', 'string', 'max:255'],
            'no_surat'          => ['required', 'max:255'],
            'indeks'            => ['required', 'max:255'],
            'tanggal_surat'     => ['required'],
            'tanggal_masuk'     => ['required'],
            'perihal'           => ['required'],
            'file'              => ['required', 'file'],
            'sifat_surat'       => ['required', 'exists:sifat_surat,id'],
        ]);
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $request->file->storeAs('files', $name);

        SuratMasuk::create([
            'asal_surat'        => $request->asal_surat,
            'no_surat'          => $request->no_surat,
            'indeks'            => $request->indeks,
            'tanggal_surat'     => $request->tanggal_surat,
            'tanggal_masuk'     => $request->tanggal_masuk,
            'perihal'           => $request->perihal,
            'file'              => $name,
            'user_id'           => auth()->id(),
            'sifat_surat_id'    => $request->sifat_surat,
        ]);        

        return redirect()->route('surat_masuk.index')->with('success', 'Berhasil menambah surat');
    }

   
    public function show($id)
    {
        $surat = SuratMasuk::findOrFail($id);
        return view('surat_masuk.show', compact('surat'));
    }


    public function edit($id)
    {
        $surat = SuratMasuk::findOrFail($id);
        $sifat_surat = SifatSurat::all();

        return view('surat_masuk.edit', compact('surat', 'sifat_surat'));
    }

  
    public function update(Request $request, $id)
    {
        $surat = SuratMasuk::findOrFail($id);
        $name = '';

        $request->validate([
            'asal_surat'        => ['required', 'string', 'max:255'],
            'no_surat'          => ['required', 'max:255'],
            'indeks'            => ['required', 'max:255'],
            'tanggal_surat'     => ['required'],
            'tanggal_masuk'     => ['required'],
            'perihal'           => ['required'],
            'sifat_surat'       => ['required', 'exists:sifat_surat,id'],
        ]);

        if($request->file != ''){
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $request->file->storeAs('files', $name);
        }
        else {
            $name = $surat->file;
        }

        $surat->update([
            'asal_surat'        => $request->asal_surat,
            'no_surat'          => $request->no_surat,
            'indeks'            => $request->indeks,
            'tanggal_surat'     => $request->tanggal_surat,
            'tanggal_masuk'     => $request->tanggal_masuk,
            'perihal'           => $request->perihal,
            'file'              => $name,
            'user_id'           => $surat->user_id,
            'sifat_surat_id'       => $request->sifat_surat,
        ]);

        return redirect()->route('surat_masuk.index')->with('success', 'Berhasil mengedit surat');
    }

    
    public function destroy($id)
    {
        $surat = SuratMasuk::findOrFail($id);
        $surat->delete();

        Storage::delete('files/' . $surat->file);

        return redirect()->route('surat_masuk.index')->with('success', 'Berhasil menghapus surat');
    }

    public function download($id)
    {
        $surat = SuratMasuk::findOrFail($id);
        $name = $surat->file;
        try {

            return Storage::download('files/' . $name);
            
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function preview($id)
    {
        $surat = SuratMasuk::findOrFail($id);
        return view('surat_masuk.preview', compact('surat'));
    }



    //untuk controller disposisi
    public function verification(SuratMasuk $surat)
    {
        return view('surat_masuk.verification', compact('surat'));
    }

    public function updateVerification(Request $request, $id)
    {
        $surat = SuratMasuk::findOrFail($id);
        $check = $request->has('verifikasi');
        
        $surat->update([
            'catatan_tambahan' => $request->catatan_tambahan,
            'verifikasi'    => $check,
        ]);

        return redirect()->route('home')->with('success', 'Oke!');
    }
}


