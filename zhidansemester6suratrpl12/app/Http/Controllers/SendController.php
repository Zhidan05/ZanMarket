<?php

namespace App\Http\Controllers;

use App\Models\Send;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Send::all();
        return view('send.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('send.create');
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
            'no_surat'=>'required',
            'pengirim'=>'required',
            'perihal'=>'required'
        ]);

        $data=$request->all();
        $data['id_user']=Auth::user()->id;
        Send::create($data);
        return redirect('/send')->with('sukses','Data Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function show(Send $send)
    {
        return view('send.detail', compact('send'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function edit(Send $send)
    {
        return view('send.edit', compact('send'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Send $send)
    {
        $request->validate([
            'no_agenda'=>'required',
            'jenis_surat'=>'required',
            'tanggal_kirim'=>'required',
            'no_surat'=>'required',
            'pengirim'=>'required',
            'perihal'=>'required'
        ]);

        $dl=Send::findOrFail($send->id);
        $db=$request->all();
        $dl->update($db);
        return redirect('/send')->with('sukses','Data Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function destroy(Send $send)
    {
        $send::destroy($send->id);
        return redirect('/send')->with('sukses','Data Dihapus');
    }
}
