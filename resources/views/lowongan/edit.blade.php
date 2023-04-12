@extends('master')
@section('title')
    <title>Edit lowongan</title>
@endsection
@section('body')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Data Fakultas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('lowongan.update', $lowongan->id) }}  " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 mt-3">
                            <label for="judul">Lowongan</label>
                            <input type="text" class="form-control" placeholder="" id="judul_lowongan"
                                value="{{ $lowongan->judul_lowongan }}" name="judul_lowongan">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Job time</label>
                            <input type="text" class="form-control" placeholder="" id="job_time"
                                value="{{ $lowongan->job_time }}" name="job_time">
                        </div>
                        <div class="form-group mb-3">
                            <label>Lokasi</label>
                            <select class="form-control" name="lokasi_id" id="lokasi_id">
                                @foreach ($lokasi as $k)
                                    <option value="{{ $k->id }}" @if ($k->id == $lowongan->lokasi_id) selected @endif>
                                        {{ $k->nama_lokasi }}</option>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Pekejaan</label>
                            <select class="form-control" name="pekerjaan_id" id="pekerjaan_id">
                                @foreach ($pekerjaan as $k)
                                    <option value="{{ $k->id }}" @if ($k->id == $lowongan->pekerjaan_id) selected @endif>
                                        {{ $k->nama_pekerjaan }}</option>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Tanggal Pasang</label>
                            <input type="date" class="form-control" placeholder="" value="{{ $lowongan->tgl_pasang }}"
                                name="tgl_pasang" id="tgl_pasang">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">salary</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $lowongan->salary }}"
                                name="salary" id="salary">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">ipk</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $lowongan->ipk }}"
                                name="ipk" id="ipk">
                        </div>
                        @if (auth()->user()->role == 'Admin')
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="">Pilih status</option>
                                    <option value="1">Diterima</option>
                                    <option value="0">Pending</option>
                                    <option value="2">Ditolak</option>
                                </select>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
