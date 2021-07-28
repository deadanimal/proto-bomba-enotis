<?php

namespace App\Http\Controllers;

use App\Models\Notis;
use Illuminate\Http\Request;

class NotisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notis = Notis::all();
        return view('pages.notisbaru', [
            'notisan' => $notis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notis = new Notis;

        $notis->nama = $request->nama;
        $notis->alamat = $request->alamat;
        // $notis->jenis_kesalahan = $request->jenis_kesalahan;
        // $notis->lokasi_kesalahan = $request->lokasi_kesalahan;
        $notis->tempoh_notis = $request->tempoh_notis;
        // $notis->gambar = $request->gambar;
        // $notis->status = $request->status;

        $notis->save();

        return redirect('/notis-baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notis  $notis
     * @return \Illuminate\Http\Response
     */
    public function show(Notis $notis)
    {
        return view('notisan.show', [
            'notisan' => $notis,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notis  $notis
     * @return \Illuminate\Http\Response
     */
    public function edit(Notis $notis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notis  $notis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notis $notis)
    {
        $notis = new Notis;

        $notis->nama = $request->nama;
        $notis->alamat = $request->alamat;
        // $notis->jenis_kesalahan = $request->jenis_kesalahan;
        // $notis->lokasi_kesalahan = $request->lokasi_kesalahan;
        $notis->tempoh_notis = $request->tempoh_notis;
        // $notis->gambar = $request->gambar;
        // $notis->status = $request->status;

        $notis->save();

        return redirect('/notis-baru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notis  $notis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notis $notis)
    {
        //
    }
}
