<?php

namespace App\Http\Controllers;

use App\Models\PoliAnak;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PoliAnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.poli-anak.index',[
            'poli_anaks'=>PoliAnak::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.poli-anak.create',[
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
            'nama_ibu' =>'required',
            'nama_ayah' =>'required',
            'keluhan' =>'required',
            'dokter_id' =>'required',
            
        ]);
        
        PoliAnak::create($validatedData);
        return redirect('/polianak')->with('pesan_tambah','Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliAnak  $poliAnak
     * @return \Illuminate\Http\Response
     */
    public function show(PoliAnak $poliAnak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliAnak  $poliAnak
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliAnak $poliAnak,$id)
    {
        return view('dashboard.poli-anak.edit',[
            'poli_anaks'=>$poliAnak::find($id),
            'pasiens'=>Pasien::all(),
            'dokters'=>Dokter::all()
        ]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoliAnak  $poliAnak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliAnak $poliAnak,$id)
    {
        $validatedData=$request->validate([
            'pasien_id' =>'required',
            'nama_ibu' =>'required',
            'nama_ayah' =>'required',
            'keluhan' =>'required',
            'dokter_id' =>'required',
        ]);
        
        PoliAnak::where('id',$id)
                ->update($validatedData);
        return redirect('/polianak')->with('pesan_edit','Data Berhasil di Ubah');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliAnak  $poliAnak
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliAnak $poliAnak,$id)
    {
        PoliAnak::destroy($id);
        return redirect('/polianak')->with('pesan_hapus','Data Deleted Successfully');
    }
    
}
