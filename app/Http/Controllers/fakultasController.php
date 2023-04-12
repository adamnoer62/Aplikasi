<?php

namespace App\Http\Controllers;
use App\Models\fakultas;
use Illuminate\Http\Request;

class fakultascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = fakultas::get();
       return view('fakultas.index', compact('fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fakultas = fakultas::create([
            'nama_fakultas' => $request->input('nama_fakultas')
         
            ]);
            return redirect('fakultas');
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
        $fakultas = fakultas::find($id);
      
        return view('fakultas.edit', compact('fakultas'));
        
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
        $fakultas = fakultas::find($id)->update([
            'nama_fakultas' => $request->input('nama_fakultas')
           
            ]);
            return redirect('fakultas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fakultas = fakultas::find($id);
        $fakultas->delete();
        return redirect('fakultas');
    }
}
