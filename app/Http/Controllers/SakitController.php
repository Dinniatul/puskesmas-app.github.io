<?php

namespace App\Http\Controllers;

use App\Models\Sakit;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;
use PDF;

class SakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.surat-sakit.index',[
            'sakits'=>Sakit::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.surat-sakit.create',[
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
        'tgl_mulai' =>'required',
        'tgl_berakhir' =>'required',
        'dokter_id' =>'required',
    ]);

     Sakit::create($validatedData);
     return redirect('/sakit');

 }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sakit  $sakit
     * @return \Illuminate\Http\Response
     */
    public function show(Sakit $sakit)
    {
        return view('dashboard.surat-sakit.show',[
            'sakits'=>$sakit,
            'pasiens'=>Pasien::all()

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sakit  $sakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Sakit $sakit)
    {
        return view('dashboard.surat-sakit.edit',[
            'sakits'=>$sakit,
            'pasiens'=>Pasien::all(),
            'dokters'=>Dokter::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sakit  $sakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sakit $sakit)
    {
        $validatedData=$request->validate([
        'pasien_id'=>'required',
        'tgl_mulai' =>'required',
        'tgl_berakhir' =>'required',
        'dokter_id' =>'required',
    ]);

     Sakit::where('id',$sakit->id)
        ->update($validatedData);
        return redirect('/sakit')->with('pesan_edit','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sakit  $sakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sakit $sakit)
    {
        Sakit::destroy($sakit->id);
        return redirect('../sakit')->with('pesan_hapus','Data Deleted Successfully');   
    }

    public function cetak_pdf(Sakit $sakit)
    {
        $pdf = PDF::loadview('dashboard.surat-sakit.show',['sakits'=>Sakit::find($sakit->id)]);
        return $pdf->stream();
    }
}
