<?php

namespace App\Http\Controllers;

use App\Models\Penajam;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenajamController extends Controller
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
        
        
        $penajam = Penajam::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('penajam.index',compact('penajam', 'keyword' ));
    }

    

    public function cetakpenajam()
    {
        $penajam = Penajam::all();
   
        return view('penajam.cetakpenajam', compact('penajam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penajam = Penajam::all();
  
        return view('penajam.create',compact('penajam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();

        $nmfile = Str::uuid().".".$extension;
        $path = $request->file('file')->storeAs(
            'public/file',$nmfile, 
        );

        $penajam = new Penajam();
        $penajam->tentang = $request->tentang;
        $penajam->mou = $request->mou;
        $penajam->pks = $request->pks;
        $penajam->tanggal = $request->tanggal;
        $penajam->jangka_waktu = $request->jangka_waktu;
        $penajam->unitkerja = $request->unitkerja;
        $penajam->mitrakerja = $request->mitrakerja;
        $penajam->tahapan = $request->tahapan;
        $penajam->file = $nmfile;
        $penajam->tahun = $request->tahun;
        $penajam->save();
        return redirect('/penajam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penajam = Penajam::find($id);

        return view('penajam.show', compact('penajam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penajam = Penajam::find($id);
       
        return view('penajam.edit', compact('penajam'));
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
        $penajam = Penajam::find($id);
        $penajam->tentang = $request->tentang;
        $penajam->mou = $request->mou;
        $penajam->pks = $request->pks;
        $penajam->tanggal = $request->tanggal;
        $penajam->jangka_waktu = $request->jangka_waktu;
        $penajam->unitkerja = $request->unitkerja;
        $penajam->mitrakerja = $request->mitrakerja;
        $penajam->tahapan = $request->tahapan;
        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $penajam->file = $nmfile;
        }
        $penajam->file = $nmfile;
        $penajam->tahun = $request->tahun;
        $penajam->save();

        return redirect('/penajam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penajam = Penajam::find($id);
        $penajam->delete();
        return redirect('/penajam');
    }
}
