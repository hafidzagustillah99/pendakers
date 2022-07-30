<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Samarinda;
use Illuminate\Support\Str;
 
class SamarindaController extends Controller
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
        
        
        $samarinda = Samarinda::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('samarinda.index',compact('samarinda', 'keyword' ));
    }

    

    public function cetak()
    {
        $samarinda = Samarinda::all();
   
        return view('samarinda.cetak', compact('samarinda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $samarinda = Samarinda::all();
  
        return view('samarinda.create',compact('samarinda'));
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

        $samarinda = new Samarinda();
        $samarinda->tentang = $request->tentang;
        $samarinda->mou = $request->mou;
        $samarinda->pks = $request->pks;
        $samarinda->tanggal = $request->tanggal;
        $samarinda->jangka_waktu = $request->jangka_waktu;
        $samarinda->unitkerja = $request->unitkerja;
        $samarinda->mitrakerja = $request->mitrakerja;
        $samarinda->tahapan = $request->tahapan;
        $samarinda->file = $nmfile;
        $samarinda->tahun = $request->tahun;
        $samarinda->save();
        return redirect('/samarinda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $samarinda = Samarinda::find($id);

        return view('samarinda.show', compact('samarinda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $samarinda = Samarinda::find($id);
       
        return view('samarinda.edit', compact('samarinda'));
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
        

        $samarinda = Samarinda::find($id);
        $samarinda->tentang = $request->tentang;
        $samarinda->mou = $request->mou;
        $samarinda->pks = $request->pks;
        $samarinda->tanggal = $request->tanggal;
        $samarinda->jangka_waktu = $request->jangka_waktu;
        $samarinda->unitkerja = $request->unitkerja;
        $samarinda->mitrakerja = $request->mitrakerja;
        $samarinda->tahapan = $request->tahapan;
  
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
        $samarinda->file = $nmfile;
        $samarinda->tahun = $request->tahun;
        $samarinda->save();

        return redirect('/samarinda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $samarinda = Samarinda::find($id);
        $samarinda->delete();
        return redirect('/samarinda');
    }
}
