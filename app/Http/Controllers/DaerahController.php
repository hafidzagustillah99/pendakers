<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daerah;

class DaerahController extends Controller
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
        $daftar_daerah = Daerah::all();

        return view('daftar_daerah.index', compact('daftar_daerah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daftar_daerah = new Daerah();
        
        return view('daftar_daerah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daftar_daerah = new Daerah();
        $daftar_daerah->daftar = $request->daftar;
        $daftar_daerah->save();
        return redirect('/daftar_daerah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar_daerah = Daerah::find($id);
        
        return view('daftar_daerah.edit', compact('daftar_daerah'));
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
        $daftar_daerah = Daerah::find($id);
        $daftar_daerah->daftar = $request->daftar;

        $kota->save();

        return redirect('/daftar_daerah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar_daerah = Daerah::find($id);
        $daftar_daerah->delete();
        return redirect('/daftar_daerah');
    }
}
