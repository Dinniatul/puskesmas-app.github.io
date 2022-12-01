<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use PDF;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dokter.index',[
            'dokters'=>Dokter::latest()-> paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.dokter.create',[
        'spesialis'=>Spesialis::all()
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nidn' =>'required|unique:dokters|size:16',
            'nama' =>'required',
            'umur' =>'required',
            'jenis_kelamin' =>'required',
            'spesialis_id' =>'required',
            'no_hp' =>'required',
            'alamat' =>'required',
        ]);
        
        Dokter::create($validatedData);
        return redirect('/dokter')->with('pesan_tambah','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
     public function edit(Dokter $dokter)
    {
         return view('dashboard.dokter.edit',[
            'dokters'=>$dokter,
            'spesialis'=>Spesialis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        $validatedData=$request->validate([
            'nidn' =>'required',
            'nama' =>'required',
            'umur' =>'required',
            'jenis_kelamin' =>'required',
            'spesialis_id' =>'required',
            'no_hp' =>'required',
            'alamat' =>'required',
        ]);
        
        Dokter::where('id',$dokter->id)
                ->update($validatedData);
        return redirect('/dokter')->with('pesan_edit','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        Dokter::destroy($dokter->id);
        return redirect('../dokter')->with('pesan_hapus','Data Deleted Successfully');
    }

    public function cetak()
    {
        $pdf = PDF::loadview('dashboard.laporan.laporan_dokter',['dokters'=>Dokter::all()])
                ->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
