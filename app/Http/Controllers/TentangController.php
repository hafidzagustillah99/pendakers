<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Daerah;
use App\Models\Tentang;

class TentangController extends Controller
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
    
    public function index()
    {
        
        $tentang = Tentang::all();
        $daftar_daerah = Daerah::all();
        return view('tentang.index',compact('tentang', 'daftar_daerah' ));
    }

    

    public function cetak()
    {
        $tentang = Tentang::all();
        $daftar_daerah = Daerah::all();
        return view('tentang.cetak', compact('tentang','daftar_daerah'));
    }

    public function cetaksemua()
    {
        $tentang = Tentang::all();
        $daftar_daerah = Daerah::all();
        return view('tentang.cetaksemua', compact('tentang','daftar_daerah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tentang = Tentang::all();
        $daftar_daerah = Daerah::all();
        return view('tentang.create', compact('tentang','daftar_daerah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tentang = new Tentang();
        $tentang->daerahku = $request->daerahku;
        $tentang->kepala_daerah = $request->kepala_daerah;
        $tentang->history = $request->history;
        
        $tentang->save();
        return redirect('/tentang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tentang = Perjanjian::find($id);
        $daftar_daerah = Daerah::find($id);
        return view('tentang.show', compact('tentang', 'daftar_daerah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tentang = Tentang::find($id);
        $daftar_daerah = Daerah::all();
        return view('tentang.edit', compact('tentang','daftar_daerah'));
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
        $tentang = Tentang::find($id);
        $tentang->daerahku = $request->daerahku;
        $tentang->kepala_daerah = $request->kepala_daerah;
        $tentang->history = $request->history;

        $tentang->save();

        return redirect('/tentang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tentang = Tentang::find($id);
        $tentang->delete();
        return redirect('/tentang');
    }
}
