<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kota;
use App\Models\Perjanjian;

class PerjanjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        //$perjanjian = Perjanjian::all();
        //$kota = Kota::all();
        $perjanjian = Perjanjian::where('id_nama_daerah', 'LIKE', '%'.$keyword.'%')
            ->orwhere('bidang_kerjasama', 'LIKE', '%'.$keyword. '%')
            ->orwhere('catatan', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('perjanjian.index',compact('perjanjian', 'keyword' ));
    }

    

    public function cetakperjanjian()
    {
        $perjanjian = Perjanjian::all();
        $kota = Kota::all();
        return view('perjanjian.cetakperjanjian', compact('perjanjian','kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perjanjian = Perjanjian::all();
        $kota = Kota::all();
        return view('perjanjian.create', compact('kota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perjanjian = new Perjanjian();
        $perjanjian->bidang_kerjasama = $request->bidang_kerjasama;
        $perjanjian->tanggal = $request->tanggal;
        $perjanjian->mou = $request->mou;
        $perjanjian->pks = $request->pks;
        $perjanjian->jangka_waktu = $request->jangka_waktu;
        $perjanjian->pihak = $request->pihak;
        $perjanjian->instansi = $request->instansi;
        $perjanjian->keterangan = $request->keterangan;
        $perjanjian->catatan = $request->catatan;
        $perjanjian->id_nama_daerah = $request->id_nama_daerah;
        $perjanjian->save();
        return redirect('/perjanjian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perjanjian = Perjanjian::find($id);
        $kota = Kota::find($id);
        return view('perjanjian.show', compact('perjanjian', 'kota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perjanjian = Perjanjian::find($id);
        $kota = Kota::all();
        return view('perjanjian.edit', compact('perjanjian','kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $perjanjian = Perjanjian::find($id);
        $perjanjian->bidang_kerjasama = $request->bidang_kerjasama;
        $perjanjian->tanggal = $request->tanggal;
        $perjanjian->mou = $request->mou;
        $perjanjian->pks = $request->pks;
        $perjanjian->jangka_waktu = $request->jangka_waktu;
        $perjanjian->pihak = $request->pihak;
        $perjanjian->instansi = $request->instansi;
        $perjanjian->keterangan = $request->keterangan;
        $perjanjian->catatan = $request->catatan;
        $perjanjian->id_nama_daerah = $request->id_nama_daerah;

        $perjanjian->save();

        return redirect('/perjanjian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perjanjian = Perjanjian::find($id);
        $perjanjian->delete();
        return redirect('/perjanjian');
    }
    
}
