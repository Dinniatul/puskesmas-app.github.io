<?php

namespace App\Http\Controllers;

use App\Models\PoliUmum;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PoliUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.poli-umum.index',[
            'poli_umums'=>PoliUmum::latest()->paginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.poli-umum.create',[
            'pasiens' => Pasien::all(),
            'dokters' => Dokter::all()
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
            'pasien_id' =>'required',
            'keluhan' =>'required',
            'diagxnosa' =>'required',
            'tgl_periksa' =>'required',
            'dokter_id' =>'required',
            
        ]);
        
        PoliUmum::create($validatedData);
        return redirect('/poliumum')->with('pesan_tambah','Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliUmum  $poliUmum
     * @return \Illuminate\Http\Response
     */
    public function show(PoliUmum $poliUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliUmum  $poliUmum
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliUmum $poliUmum,$id)
    {
        return view('dashboard.poli-umum.edit',[
            'poli_umums'=>$poliUmum::find($id),
            'pasiens' =>Pasien::all(),
            'dokters' =>Dokter::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoliUmum  $poliUmum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliUmum $poliUmum,$id)
    {
        $validatedData=$request->validate([
            'pasien_id' =>'required',
            'keluhan' =>'required',
            'diagnosa' =>'required',
            'tgl_periksa' =>'required',
            'dokter_id' =>'required',
        ]);
        
        PoliUmum::where('id',$id)
                ->update($validatedData);
        return redirect('/poliumum')->with('pesan_edit','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliUmum  $poliUmum
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliUmum $poliUmum,$id)
    {
        PoliUmum::destroy($id);
        return redirect('../poliumum')->with('pesan_hapus','Data Deleted Successfully');    
    }
}
