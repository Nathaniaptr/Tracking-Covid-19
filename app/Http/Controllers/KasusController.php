<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasus = Kasus::with('rw')->get();
        return view('kasus.index', compact('kasus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('kasus.create',compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'positif' => 'required',
            'sembuh' => 'required',
            'meninggal' => 'required',
            'tanggal' => 'required'

            
         ],[
            'positif.required' => 'positif Tidak boleh Kosong',
            'sembuh.required' => 'sembuh Tidak Boleh Kosong',
            'meninggal.required' => 'meninggal Tidak Boleh Kosong',
            'tanggal.required' => 'tanggal Tidak Boleh Kosong',
            
         ]);

        $kasus= new Kasus();
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->meninggal = $request->meninggal;
        $kasus->sembuh = $request->sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')
            ->with(['message'=>'Data Berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('kasus.show',compact('kasus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::all();
        $kasus = Kasus::findOrFail($id);
        return view('kasus.edit',compact('kasus','rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'positif' => 'required',
            'sembuh' => 'required',
            'meninggal' => 'required',
            'tanggal' => 'required'
      
         ],[
            'positif.required' => 'Data positif Tidak boleh Kosong',
            'sembuh.required' => 'Data sembuh Tidak Boleh Kosong',
            'meninggal.required' => 'Data meninggal Tidak Boleh Kosong',
            'tanggal.required' => 'tanggal Tidak Boleh Kosong',
            
         ]);
        $kasus = Kasus::findOrFail($id);
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->meninggal = $request->meninggal;
        $kasus->sembuh = $request->sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();;
        return redirect()->route('kasus.index')
            ->with(['message'=>'Data Berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id)->delete();
        return redirect()->route('kasus.index')
                        ->with(['message1'=>'Berhasil dihapus']);
    }
}
