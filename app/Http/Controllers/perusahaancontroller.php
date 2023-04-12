<?php

namespace App\Http\Controllers;
use App\Models\kategori;
use App\Models\perusahaan;

use Illuminate\Http\Request;

class perusahaancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::get();
        $perusahaan = perusahaan::get();
        
        return view('perusahaan.index', compact('perusahaan','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaan = perusahaan::get();
        $kategori = kategori::get();
        return view('perusahaan.create', compact('perusahaan','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perusahaan = perusahaan::create([
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'kategori_id' => $request->input('kategori_id'),
            'email_perusahaan' => $request->input('email_perusahaan'),
            'no_tlpn' => $request->input('no_tlpn'),
            'alamat_perusahaan' => $request->input('alamat_perusahaan'),
            ]);
            return redirect('/perusahaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
