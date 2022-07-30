<?php

namespace App\Http\Controllers;

use App\Models\Kukar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KukarController extends Controller
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
        
        
        $kukar = Kukar::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('kukar.index',compact('kukar', 'keyword' ));
    }

    

    public function cetakkukar()
    {
        $kukar = Kukar::all();
   
        return view('kukar.cetakkukar', compact('kukar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kukar = Kukar::all();
  
        return view('kukar.create',compact('kukar'));
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
        $kukar = new Kukar();
        $kukar->tentang = $request->tentang;
        $kukar->mou = $request->mou;
        $kukar->pks = $request->pks;
        $kukar->tanggal = $request->tanggal;
        $kukar->jangka_waktu = $request->jangka_waktu;
        $kukar->unitkerja = $request->unitkerja;
        $kukar->mitrakerja = $request->mitrakerja;
        $kukar->tahapan = $request->tahapan;
        $kukar->file = $nmfile;
        $kukar->tahun = $request->tahun;
        $kukar->save();
        return redirect('/kukar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kukar = Kukar::find($id);

        return view('kukar.show', compact('kukar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kukar = Kukar::find($id);
       
        return view('kukar.edit', compact('kukar'));
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
        $kukar = Kukar::find($id);
        $kukar->tentang = $request->tentang;
        $kukar->mou = $request->mou;
        $kukar->pks = $request->pks;
        $kukar->tanggal = $request->tanggal;
        $kukar->jangka_waktu = $request->jangka_waktu;
        $kukar->unitkerja = $request->unitkerja;
        $kukar->mitrakerja = $request->mitrakerja;
        $kukar->tahapan = $request->tahapan;
        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $kukar->file = $nmfile;
        }
        $kukar->file = $nmfile;
        $kukar->tahun = $request->tahun;
        $kukar->save();

        return redirect('/kukar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kukar = Kukar::find($id);
        $kukar->delete();
        return redirect('/kukar');
    }
}
