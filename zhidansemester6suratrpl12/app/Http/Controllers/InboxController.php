<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Inbox::all();
        return view('inbox.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inbox.create');
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
            'no_agenda'=>'required',
            'jenis_surat'=>'required',
            'tanggal_kirim'=>'required',
            'tanggal_terima'=>'required',
            'no_surat'=>'required',
            'pengirim'=>'required',
            'perihal'=>'required'
        ]);

        $data=$request->all();
        $data['id_user']=Auth::user()->id;
        Inbox::create($data);
        return redirect('/inbox')->with('sukses','Data Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function show(Inbox $inbox)
    {
        return view('inbox.detail', compact('inbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Inbox $inbox)
    {
        return view('inbox.edit', compact('inbox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inbox $inbox)
    {
        $request->validate([
            'no_agenda'=>'required',
            'jenis_surat'=>'required',
            'tanggal_kirim'=>'required',
            'tanggal_terima'=>'required',
            'no_surat'=>'required',
            'pengirim'=>'required',
            'perihal'=>'required'
        ]);

        $dl=Inbox::findOrFail($inbox->id);
        $db=$request->all();
        $dl->update($db);
        return redirect('/inbox')->with('sukses','Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inbox $inbox)
    {
        $inbox::destroy($inbox->id);
        return redirect('/inbox')->with('sukses','Data Dihapus');
    }
}
