<?php

namespace App\Http\Controllers;

use App\Models\Paser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaserController extends Controller
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
        
        
        $paser = Paser::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('paser.index',compact('paser', 'keyword' ));
    }

    

    public function cetakpaser()
    {
        $paser = Paser::all();
   
        return view('paser.cetakpaser', compact('paser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paser = Paser::all();
  
        return view('paser.create',compact('paser'));
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

        $paser = new Paser();
        $paser->tentang = $request->tentang;
        $paser->mou = $request->mou;
        $paser->pks = $request->pks;
        $paser->tanggal = $request->tanggal;
        $paser->jangka_waktu = $request->jangka_waktu;
        $paser->unitkerja = $request->unitkerja;
        $paser->mitrakerja = $request->mitrakerja;
        $paser->tahapan = $request->tahapan;
        $paser->file = $nmfile;
        $paser->tahun = $request->tahun;
        $paser->save();
        return redirect('/paser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paser = Paser::find($id);

        return view('paser.show', compact('paser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paser = Paser::find($id);
       
        return view('paser.edit', compact('paser'));
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
        $paser = Paser::find($id);
        $paser->tentang = $request->tentang;
        $paser->mou = $request->mou;
        $paser->pks = $request->pks;
        $paser->tanggal = $request->tanggal;
        $paser->jangka_waktu = $request->jangka_waktu;
        $paser->unitkerja = $request->unitkerja;
        $paser->mitrakerja = $request->mitrakerja;
        $paser->tahapan = $request->tahapan;

        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $paser->file = $nmfile;
        }
        $paser->file = $nmfile;
        $paser->tahun = $request->tahun;
        $paser->save();

        return redirect('/paser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paser = Paser::find($id);
        $paser->delete();
        return redirect('/paser');
    }
}
