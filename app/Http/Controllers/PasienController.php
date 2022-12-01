<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Kategori;
use Illuminate\Http\Request;
use PDF;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pasien.index',[
            'pasiens'=>Pasien::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pasien.create',[
        'kategoris'=>Kategori::all()
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
            'nik' =>'required|unique:pasiens|size:16',
            'nama' =>'required',
            'umur' =>'required',
            'tgl_lahir' =>'required',
            'pekerjaan' =>'required',
            'jenis_kelamin' =>'required',
            'no_hp' =>'required',
            'kategori_id' =>'required',
            'alamat' =>'required',
        ]);
        
        Pasien::create($validatedData);
        return redirect('/pasien')->with('pesan_tambah','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('dashboard.pasien.edit',[
            'pasiens'=>$pasien,
            'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validatedData=$request->validate([
            'nik' =>'required',
            'nama' =>'required',
            'umur' =>'required',
            'tgl_lahir' =>'required',
            'pekerjaan' =>'required',
            'jenis_kelamin' =>'required',
            'no_hp' =>'required',
            'kategori_id' =>'required',
            'alamat' =>'required',
        ]);
        
        Pasien::where('id',$pasien->id)
                ->update($validatedData);
        return redirect('/pasien')->with('pesan_edit','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        Pasien::destroy($pasien->id);
        return redirect('../pasien')->with('pesan_hapus','Data Deleted Successfully');
    }

    public function cetak()
    {
        $pdf = PDF::loadview('dashboard.laporan.laporan_pasien',['pasiens'=>Pasien::all()])
                ->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
