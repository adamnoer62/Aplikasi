<?php

namespace App\Http\Controllers;
use App\Models\keahlian;
use Illuminate\Http\Request;

class keahliancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keahlian = keahlian::get();
       return view('keahlian.index', compact('keahlian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keahlian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keahlian = keahlian::create([
            'nama_keahlian' => $request->input('nama_keahlian')
         
            ]);
            return redirect('keahlian');
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
        $keahlian = keahlian::find($id);
      
        return view('keahlian.edit', compact('keahlian'));
        
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
        $keahlian = keahlian::find($id)->update([
            'nama_keahlian' => $request->input('nama_keahlian')
           
            ]);
            return redirect('keahlian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keahlian = keahlian::find($id);
        $keahlian->delete();
        return redirect('keahlian');
    }
}
