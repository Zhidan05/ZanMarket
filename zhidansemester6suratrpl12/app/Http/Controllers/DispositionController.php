<?php

namespace App\Http\Controllers;

use App\Models\Disposition;
use App\Models\Inbox;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DispositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Disposition::all();
        return view('disposition.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sumuk=Inbox::all();
        return view('disposition.create', compact('sumuk'));
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
            'id_suratmasuk'=>'required',
            'no_disposisi'=>'required',
            'no_agenda'=>'required',
            'no_surat'=>'required',
            'kepada'=>'required',
            'status_surat'=>'required',
            'tanggapan'=>'required'
        ]);

        $data=$request->all();
        $data['id_user']=Auth::user()->id;
        Disposition::create($data);
        return redirect('/disposition')->with('sukses', 'Data Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disposition  $disposition
     * @return \Illuminate\Http\Response
     */
    public function show(Disposition $disposition)
    {
        return view('disposition.detail', compact('disposition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disposition  $disposition
     * @return \Illuminate\Http\Response
     */
    public function edit(Disposition $disposition)
    {
        $sumuk=Inbox::all();
        return view('disposition.edit', compact('disposition','sumuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disposition  $disposition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disposition $disposition)
    {
        $request->validate([
            'id_suratmasuk'=>'required',
            'no_disposisi'=>'required',
            'no_agenda'=>'required',
            'no_surat'=>'required',
            'kepada'=>'required',
            'status_surat'=>'required',
            'tanggapan'=>'required'
        ]);

        $dl=Disposition::findOrfail($disposition->id);
        $db=$request->all();
        $dl->update($db);
        return redirect('/disposition')->with('sukses', 'Data telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disposition  $disposition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disposition $disposition)
    {
        Disposition::destroy($disposition->id);
        return redirect('/disposition')->with('sukses', 'Data telah dihapus!');
    }
}
