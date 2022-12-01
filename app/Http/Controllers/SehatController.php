<?php

namespace App\Http\Controllers;

use App\Models\Sehat;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class SehatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.surat-sehat.index',[
            'sehats'=>Sehat::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.surat-sehat.create',[
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
            'pasien_id'=>'required',
            'tinggi_badan'=>'required',
            'berat_badan'=>'required',
            'golongan_darah'=>'required',
            'riwayat_penyakit'=>'required',
            'tgl_periksa'=>'required',
            'keperluan'=>'required',
            'dokter_id' =>'required',
        ]);

        Sehat::create($validatedData);
        return redirect('/sehat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sehat  $sehat
     * @return \Illuminate\Http\Response
     */
    public function show(Sehat $sehat)
    {
         return view('dashboard.surat-sehat.show',[
            'sehats'=>$sehat,
            'pasiens'=>Pasien::all()

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sehat  $sehat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sehat $sehat)
    {
        return view('dashboard.surat-sehat.edit',[
            'sehats'=>$sehat,
            'pasiens'=>Pasien::all(),
            'dokters'=>Dokter::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sehat  $sehat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sehat $sehat)
    {
        $validatedData=$request->validate([
            'pasien_id'=>'required',
            'tinggi_badan'=>'required',
            'berat_badan'=>'required',
            'golongan_darah'=>'required',
            'riwayat_penyakit'=>'required',
            'tgl_periksa'=>'required',
            'keperluan'=>'required',
            'dokter_id' =>'required',
        ]);
        
        Sehat::where('id',$sehat->id)
        ->update($validatedData);
        return redirect('/sehat')->with('pesan_edit','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sehat  $sehat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sehat $sehat)
    {
        Sehat::destroy($sehat->id);
        return redirect('../sehat')->with('pesan_hapus','Data Deleted Successfully'); 
    }
}
