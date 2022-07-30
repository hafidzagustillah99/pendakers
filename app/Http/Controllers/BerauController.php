<?php

namespace App\Http\Controllers;

use App\Models\Berau;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BerauController extends Controller
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
        
        
        $berau = Berau::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('berau.index',compact('berau', 'keyword' ));
    }

    

    public function cetakberau()
    {
        $berau = Berau::all();
   
        return view('berau.cetakberau', compact('berau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berau = Berau::all();
  
        return view('berau.create',compact('berau'));
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

        $berau = new Berau();
        $berau->tentang = $request->tentang;
        $berau->mou = $request->mou;
        $berau->pks = $request->pks;
        $berau->tanggal = $request->tanggal;
        $berau->jangka_waktu = $request->jangka_waktu;
        $berau->unitkerja = $request->unitkerja;
        $berau->mitrakerja = $request->mitrakerja;
        $berau->tahapan = $request->tahapan;
        $berau->file = $nmfile;
        $berau->tahun = $request->tahun;
        $berau->save();
        return redirect('/berau');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berau = Berau::find($id);

        return view('berau.show', compact('berau'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berau = Berau::find($id);
       
        return view('berau.edit', compact('berau'));
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
        $berau = Berau::find($id);
        $berau->tentang = $request->tentang;
        $berau->mou = $request->mou;
        $berau->pks = $request->pks;
        $berau->tanggal = $request->tanggal;
        $berau->jangka_waktu = $request->jangka_waktu;
        $berau->unitkerja = $request->unitkerja;
        $berau->mitrakerja = $request->mitrakerja;
        $berau->tahapan = $request->tahapan;
        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $berau->file = $nmfile;
        }
        $berau->file = $nmfile;
        $berau->tahun = $request->tahun;
        $berau->save();

        return redirect('/berau');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berau = Berau::find($id);
        $berau->delete();
        return redirect('/berau');
    }
}
