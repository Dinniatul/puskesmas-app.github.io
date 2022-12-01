<?php

namespace App\Http\Controllers;

use App\Models\PoliLansia;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PoliLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.poli-lansia.index',[
            'poli_lansias'=>PoliLansia::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.poli-lansia.create',[
            'pasiens'=>Pasien::all(),
            'dokters'=>Dokter::all()
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
            'diagnosa' =>'required',
            'tgl_periksa' =>'required',
            'dokter_id' =>'required',
            
        ]);
        
        PoliLansia::create($validatedData);
        return redirect('/polilansia')->with('pesan_tambah','Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliLansia  $poliLansia
     * @return \Illuminate\Http\Response
     */
    public function show(PoliLansia $poliLansia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliLansia  $poliLansia
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliLansia $poliLansia,$id)
    {
        return view('dashboard.poli-lansia.edit',[
            'poli_lansias'=>$poliLansia::find($id),
            'pasiens'=>Pasien::all(),
            'dokters'=>Dokter::all()
        ]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoliLansia  $poliLansia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliLansia $poliLansia,$id)
    {
        $validatedData=$request->validate([
            'pasien_id' =>'required',
            'keluhan' =>'required',
            'diagnosa' =>'required',
            'tgl_periksa' =>'required',
            'dokter_id' =>'required',
        ]);
        
        PoliLansia::where('id',$id)
                ->update($validatedData);
        return redirect('/polilansia')->with('pesan_edit','Data Berhasil di Ubah');;    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliLansia  $poliLansia
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliLansia $poliLansia,$id)
    {
        PoliLansia::destroy($id);
        return redirect('../polilansia')->with('pesan_hapus','Data Deleted Successfully');   
    }
}
