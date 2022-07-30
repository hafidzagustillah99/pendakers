<?php

namespace App\Http\Controllers;

use App\Models\Balikpapan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BalikpapanController extends Controller
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
        $balikpapan = Balikpapan::all();
        
        $balikpapan = Balikpapan::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('balikpapan.index',compact('balikpapan', 'keyword' ));
    }

    

    public function cetakku()
    {
        $balikpapan = Balikpapan::all();
   
        return view('balikpapan.cetakku', compact('balikpapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $balikpapan = Balikpapan::all();
  
        return view('balikpapan.create',compact('balikpapan'));
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

        $balikpapan = new Balikpapan();
        $balikpapan->tentang = $request->tentang;
        $balikpapan->mou = $request->mou;
        $balikpapan->pks = $request->pks;
        $balikpapan->tanggal = $request->tanggal;
        $balikpapan->jangka_waktu = $request->jangka_waktu;
        $balikpapan->unitkerja = $request->unitkerja;
        $balikpapan->mitrakerja = $request->mitrakerja;
        $balikpapan->tahapan = $request->tahapan;
        $balikpapan->file = $nmfile;
        $balikpapan->tahun = $request->tahun;
        $balikpapan->save();
        return redirect('/balikpapan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $balikpapan = Balikpapan::find($id);

        return view('balikpapan.show', compact('balikpapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $balikpapan = Balikpapan::find($id);
       
        return view('balikpapan.edit', compact('balikpapan'));
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

        $balikpapan = Balikpapan::find($id);
        $balikpapan->tentang = $request->tentang;
        $balikpapan->mou = $request->mou;
        $balikpapan->pks = $request->pks;
        $balikpapan->tanggal = $request->tanggal;
        $balikpapan->jangka_waktu = $request->jangka_waktu;
        $balikpapan->unitkerja = $request->unitkerja;
        $balikpapan->mitrakerja = $request->mitrakerja;
        $balikpapan->tahapan = $request->tahapan;

        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $samarinda->file = $nmfile;
        }
        $balikpapan->file = $nmfile;
        $balikpapan->tahun = $request->tahun;
        $balikpapan->save();

        return redirect('/balikpapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $balikpapan = Balikpapan::find($id);
        $balikpapan->delete();
        return redirect('/balikpapan');
    }
}
