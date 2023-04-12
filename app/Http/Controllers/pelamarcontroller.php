<?php

namespace App\Http\Controllers;
use App\Models\fakultas;
use App\Models\studi;
use App\Models\pelamar;
use App\Models\User;
use Illuminate\Http\Request;

class pelamarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelamar = pelamar::get();
        $studi = studi::get();
        $fakultas = fakultas::get();
        $user = user::get();
        return view('pelamar.index' ,compact('pelamar','studi','fakultas','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studi = studi::get();
        $fakultas = fakultas::get();
        $pelamar = pelamar::get();
        return view('pelamar.create', compact('studi','fakultas','pelamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
{
    $this->validate($request, [
        'nama_pelamar_user' => 'required',
        'studi_id' => 'required',
        'fakultas_id' => 'required',
        'gendre_user' => 'required',
        'email_user' => 'required|email',
        'no_tlp' => 'required',
        'file' => 'required|mimes:pdf,doc,docx|max:2048'
    ]);

    $pelamar = new Pelamar();
    $pelamar->nama_pelamar_user = $request->input('nama_pelamar_user');
    $pelamar->fakultas_id = $request->input('fakultas_id');
    $pelamar->studi_id = $request->input('studi_id');
    $pelamar->gendre_user = $request->input('gendre_user');
    $pelamar->no_tlp = $request->input('no_tlp');
    $pelamar->email_user = $request->input('email_user');
    $pelamar->tgl_lahir = $request->input('tgl_lahir');
    $pelamar->user_id = $request->input('user_id');

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move('upload/dokumen', $filename);
        $pelamar->file = $filename;
    }

    $pelamar->status = '0';
    $pelamar->save();

    // dd($pelamar);

    return redirect('/lowongan');
}
public function download($id)
{
    $pelamar = Pelamar::findOrFail($id);
    $path = public_path('upload/dokumen/' . $pelamar->file);

    return response()->download($path);
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
        $studi = studi::get();
        $user =  User::get();
        $fakultas = fakultas::get();
        $pelamar = pelamar::find($id);
        return view('pelamar.edit', compact('studi','fakultas','pelamar','user'));
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
          $this->validate($request,[

        ]);
        $pelamar =  pelamar ::find($id);
        $pelamar->nama_pelamar_user = $request->nama_pelamar_user;
        $pelamar->fakultas_id = $request->fakultas_id;
        $pelamar->studi_id = $request->studi_id;
        $pelamar->gendre_user = $request->gendre_user;
        $pelamar->no_tlp = $request->no_tlp;
        $pelamar->email_user = $request->email_user;
        $pelamar->tgl_lahir = $request->tgl_lahir;
        $pelamar->status =  $request->status;
        $pelamar->save();

        return redirect('/pelamar');

    }

      public function updateStatus(Request $request, $id)
    {

        $pelamar =  pelamar ::find($id);
        $pelamar->status =  $request->status;
        $pelamar->save();
        return redirect('/pelamar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelamar = pelamar::find($id);
        $pelamar->delete();
        return redirect('/pelamar');
    }
}
