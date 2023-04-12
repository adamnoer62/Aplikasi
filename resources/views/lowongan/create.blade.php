@extends('master')
@section('title')
    <title>Create lowongan</title>
@endsection
@section('body')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data lowongan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('lowongan.store') }} " method="POST">
                        @csrf
                        <div class="mb-3 mt-3">
                            {{--  <label for="judul">Nama lowongan</label>
                            <input type="text" class="form-control" id="judul" placeholder="" value=""
                                name="judul_lowongan">  --}}
                            <label>Nama lowongan</label>
                            <select class="form-control" name="judul_lowongan">
                                <option value="">Pilih Perusahaan</option>
                                @foreach ($perusahaan as $k)
                                    <option value="{{ $k->id }}">
                                        {{ $k->nama_perusahaan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Lokasi</label>
                            <select class="form-control" name="lokasi_id">
                                <option value="">Pilih Lokasi</option>
                                @foreach ($lokasi as $k)
                                    <option value="{{ $k->id }}">
                                        {{ $k->nama_lokasi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>pekerjaan</label>
                            <select class="form-control" name="pekerjaan_id">
                                <option value="">Pilih Pekerjaan</option>
                                @foreach ($pekerjaan as $k)
                                    <option value="{{ $k->id }}">
                                        {{ $k->nama_pekerjaan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="judul">IPK</label>
                            <input type="text" class="form-control" id="judul" placeholder="" value=""
                                name="ipk">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Tanggal Pasang</label>
                            <input type="date" class="form-control" id="judul" placeholder="" value=""
                                name="tgl_pasang">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Gaji</label>
                            <input type="text" class="form-control" id="judul" placeholder="" value=""
                                name="salary">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Job Time</label>
                            <input type="text" class="form-control" id="judul" placeholder="" value=""
                                name="job_time">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
