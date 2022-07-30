<?php

namespace App\Http\Controllers;

use App\Models\Kubar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KubarController extends Controller
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
        
        
        $kubar = Kubar::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('kubar.index',compact('kubar', 'keyword' ));
    }

    

    public function cetakkubar()
    {
        $kubar = Kubar::all();
   
        return view('kubar.cetakkubar', compact('kubar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kubar = Kubar::all();
  
        return view('kubar.create',compact('kubar'));
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

        $kubar = new Kubar();
        $kubar->tentang = $request->tentang;
        $kubar->mou = $request->mou;
        $kubar->pks = $request->pks;
        $kubar->tanggal = $request->tanggal;
        $kubar->jangka_waktu = $request->jangka_waktu;
        $kubar->unitkerja = $request->unitkerja;
        $kubar->mitrakerja = $request->mitrakerja;
        $kubar->tahapan = $request->tahapan;
        $kubar->file = $nmfile;
        $kubar->tahun = $request->tahun;
        $kubar->save();
        return redirect('/kubar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kubar = Kubar::find($id);

        return view('kubar.show', compact('kubar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kubar = Kubar::find($id);
       
        return view('kubar.edit', compact('kubar'));
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
        $kubar = Kubar::find($id);
        $kubar->tentang = $request->tentang;
        $kubar->mou = $request->mou;
        $kubar->pks = $request->pks;
        $kubar->tanggal = $request->tanggal;
        $kubar->jangka_waktu = $request->jangka_waktu;
        $kubar->unitkerja = $request->unitkerja;
        $kubar->mitrakerja = $request->mitrakerja;
        $kubar->tahapan = $request->tahapan;
        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $kubar->file = $nmfile;
        }
        $kubar->file = $nmfile;
        $kubar->tahun = $request->tahun;
        $kubar->save();

        return redirect('/kubar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kubar = Kubar::find($id);
        $kubar->delete();
        return redirect('/kubar');
    }
}
