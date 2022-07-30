<?php

namespace App\Http\Controllers;

use App\Models\Mahakam;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MahakamController extends Controller
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
        
        
        $mahakam = Mahakam::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('mahakam.index',compact('mahakam', 'keyword' ));
    }

    

    public function cetakmahakam()
    {
        $mahakam = Mahakam::all();
   
        return view('mahakam.cetakmahakam', compact('mahakam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahakam = Mahakam::all();
  
        return view('mahakam.create',compact('mahakam'));
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

        $mahakam = new Mahakam();
        $mahakam->tentang = $request->tentang;
        $mahakam->mou = $request->mou;
        $mahakam->pks = $request->pks;
        $mahakam->tanggal = $request->tanggal;
        $mahakam->jangka_waktu = $request->jangka_waktu;
        $mahakam->unitkerja = $request->unitkerja;
        $mahakam->mitrakerja = $request->mitrakerja;
        $mahakam->tahapan = $request->tahapan;
        $mahakam->file = $nmfile;
        $mahakam->tahun = $request->tahun;
        $mahakam->save();
        return redirect('/mahakam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahakam = Mahakam::find($id);

        return view('mahakam.show', compact('mahakam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahakam = Mahakam::find($id);
       
        return view('mahakam.edit', compact('mahakam'));
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
        $mahakam = Mahakam::find($id);
        $mahakam->tentang = $request->tentang;
        $mahakam->mou = $request->mou;
        $mahakam->pks = $request->pks;
        $mahakam->tanggal = $request->tanggal;
        $mahakam->jangka_waktu = $request->jangka_waktu;
        $mahakam->unitkerja = $request->unitkerja;
        $mahakam->mitrakerja = $request->mitrakerja;
        $mahakam->tahapan = $request->tahapan;
        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $mahakam->file = $nmfile;
        }
        $mahakam->file = $nmfile;
        $mahakam->tahun = $request->tahun;
        $mahakam->save();

        return redirect('/mahakam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahakam = Mahakam::find($id);
        $mahakam->delete();
        return redirect('/mahakam');
    }
}
