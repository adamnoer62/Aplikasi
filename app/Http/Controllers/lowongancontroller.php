<?php

namespace App\Http\Controllers;
use App\Models\pekerjaan;
use App\Models\lowongan;
use App\Models\lokasi;
use App\Models\perusahaan;
use Illuminate\Http\Request;

class lowongancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = lokasi::get();
        $pekerjaan = pekerjaan::get();
        $lowongan = lowongan::get();
        return view('lowongan.index', compact('lowongan','lokasi','pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = lokasi::get();
        $lowongan = lowongan::get();
        $pekerjaan = pekerjaan::get();
        $perusahaan = perusahaan::get();
        return view('lowongan.create', compact('lokasi','pekerjaan','lowongan','perusahaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // $lowongan = lowongan::create([
            // 'judul_lowongan' => $request->input('judul_lowongan'),
            // 'lokasi_id' => $request->input('lokasi_id'),
            // 'pekerjaan_id' => $request->input('pekerjaan_id'),
            // 'ipk' => $request->input('ipk'),
            // 'tgl_pasang' => $request->input('tgl_pasang'),
            // 'salary' => $request->input('salary'),
            // 'job_time' => $request->input('job_time'),
            // 'status' => 0,
            // ]);
            // return redirect('/lowongan');

            $this->validate($request,[
            'judul_lowongan' => 'required',
            'lokasi_id' => 'required',
            'pekerjaan_id' => 'required',
             'ipk' => 'required',
            'tgl_pasang' => 'required',
             'salary' => 'required',
            'job_time' => 'required'
        ]);
        $pelamar = new lowongan();
        $pelamar->judul_lowongan = $request->judul_lowongan;
        $pelamar->lokasi_id = $request->lokasi_id;
        $pelamar->pekerjaan_id = $request->pekerjaan_id;
        $pelamar->ipk = $request->ipk;
        $pelamar->tgl_pasang = $request->tgl_pasang;
        $pelamar->salary = $request->salary;
        $pelamar->job_time = $request->job_time;
        $pelamar->status = '0';
        $pelamar->save();
       return redirect('/lowongan');
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
        $lokasi = lokasi::get();
        $pekerjaan = pekerjaan::get();
        $lowongan = lowongan::find($id);
        return view('lowongan.edit', compact('lowongan','lokasi','pekerjaan'));
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
        $pelamar = lowongan ::find($id);
        $pelamar->judul_lowongan = $request->judul_lowongan;
        $pelamar->lokasi_id = $request->lokasi_id;
        $pelamar->pekerjaan_id = $request->pekerjaan_id;
        $pelamar->ipk = $request->ipk;
        $pelamar->tgl_pasang = $request->tgl_pasang;
        $pelamar->salary = $request->salary;
        $pelamar->job_time = $request->job_time;
        $pelamar->status = $request->status;
        $pelamar->save();
       return redirect('/lowongan');

    }

  public function updateStatus(Request $request, $id)
{
    $lowongan = Lowongan::findOrFail($id);
    $lowongan->status = $request->status;
    $lowongan->save();
    return redirect()->route('lowongan.index')->with('success', 'Status lowongan berhasil diupdate!');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function destroy($id)
{
    $lowongan = Lowongan::find($id);
    $lowongan->delete();
    return redirect('/lowongan')->with('success', 'Lowongan berhasil dihapus');
}

}
