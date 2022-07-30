<?php

namespace App\Http\Controllers;

use App\Models\Bontang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BontangController extends Controller
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
        
        
        $bontang = Bontang::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('bontang.index',compact('bontang', 'keyword' ));
    }

    

    public function cetakbontang()
    {
        $bontang = Bontang::all();
   
        return view('bontang.cetakbontang', compact('bontang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bontang = Bontang::all();
  
        return view('bontang.create',compact('bontang'));
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

        $bontang = new Bontang();
        $bontang->tentang = $request->tentang;
        $bontang->mou = $request->mou;
        $bontang->pks = $request->pks;
        $bontang->tanggal = $request->tanggal;
        $bontang->jangka_waktu = $request->jangka_waktu;
        $bontang->unitkerja = $request->unitkerja;
        $bontang->mitrakerja = $request->mitrakerja;
        $bontang->tahapan = $request->tahapan;
        $bontang->file = $nmfile;
        $bontang->tahun = $request->tahun;
        $bontang->save();
        return redirect('/bontang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bontang = Bontang::find($id);

        return view('bontang.show', compact('bontang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bontang = Bontang::find($id);
       
        return view('bontang.edit', compact('bontang'));
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
        $bontang = Bontang::find($id);
        $bontang->tentang = $request->tentang;
        $bontang->mou = $request->mou;
        $bontang->pks = $request->pks;
        $bontang->tanggal = $request->tanggal;
        $bontang->jangka_waktu = $request->jangka_waktu;
        $bontang->unitkerja = $request->unitkerja;
        $bontang->mitrakerja = $request->mitrakerja;
        $bontang->tahapan = $request->tahapan;
        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $bontang->file = $nmfile;
        }
        $bontang->file = $nmfile;
        $bontang->tahun = $request->tahun;
        $bontang->save();

        return redirect('/bontang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bontang = Bontang::find($id);
        $bontang->delete();
        return redirect('/bontang');
    }
}
