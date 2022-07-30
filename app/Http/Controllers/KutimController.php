<?php

namespace App\Http\Controllers;

use App\Models\Kutim;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KutimController extends Controller
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
        
        
        $kutim = Kutim::where('tentang', 'LIKE', '%'.$keyword.'%')
            ->orwhere('tahun', 'LIKE', '%'.$keyword. '%')
            ->orwhere('mitrakerja', 'LIKE', '%'.$keyword. '%')
            ->paginate(5);
        return view('kutim.index',compact('kutim', 'keyword' ));
    }

    

    public function cetakkutim()
    {
        $kutim = Kutim::all();
   
        return view('kutim.cetakkutim', compact('kutim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kutim = Kutim::all();
  
        return view('kutim.create',compact('kutim'));
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

        $kutim = new Kutim();
        $kutim->tentang = $request->tentang;
        $kutim->mou = $request->mou;
        $kutim->pks = $request->pks;
        $kutim->tanggal = $request->tanggal;
        $kutim->jangka_waktu = $request->jangka_waktu;
        $kutim->unitkerja = $request->unitkerja;
        $kutim->mitrakerja = $request->mitrakerja;
        $kutim->tahapan = $request->tahapan;
        $kutim->file = $nmfile;
        $kutim->tahun = $request->tahun;
        $kutim->save();
        return redirect('/kutim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kutim = Kutim::find($id);

        return view('kutim.show', compact('kutim'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kutim = Kutim::find($id);
       
        return view('kutim.edit', compact('kutim'));
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
        $kutim = Kutim::find($id);
        $kutim->tentang = $request->tentang;
        $kutim->mou = $request->mou;
        $kutim->pks = $request->pks;
        $kutim->tanggal = $request->tanggal;
        $kutim->jangka_waktu = $request->jangka_waktu;
        $kutim->unitkerja = $request->unitkerja;
        $kutim->mitrakerja = $request->mitrakerja;
        $kutim->tahapan = $request->tahapan;

        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'public/file',
                $nmfile,
                
            );
           echo  $kutim->file = $nmfile;
        }
        $kutim->file = $nmfile;
        $kutim->tahun = $request->tahun;
        $kutim->save();

        return redirect('/kutim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kutim = Kutim::find($id);
        $kutim->delete();
        return redirect('/kutim');
    }
}
