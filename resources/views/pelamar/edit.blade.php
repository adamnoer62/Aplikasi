@extends('master')
@section('title')
    <title>Edit Pelamar</title>
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
                    <form action="{{ route('pelamar.update', $pelamar->id) }}  " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 mt-3">
                            <label for="judul">Nama</label>
                            <input type="text" class="form-control" placeholder="" id="nama_pelamar_user"
                                value="{{ $pelamar->nama_pelamar_user }}" name="nama_pelamar_user">
                        </div>
                        <div class="form-group mb-3">
                            <label>Prodi</label>
                            <select class="form-control" name="studi_id" id="studi_id">
                                @foreach ($studi as $k)
                                    <option value="{{ $k->id }}" @if ($k->id == $pelamar->studi_id) selected @endif>
                                        {{ $k->nama_prodi }}</option>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Prodi</label>
                            <select class="form-control" name="fakultas_id" id="fakultas_id">
                                @foreach ($fakultas as $k)
                                    <option value="{{ $k->id }}" @if ($k->id == $pelamar->fakultas_id) selected @endif>
                                        {{ $k->nama_fakultas }}</option>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Jenis Kelamain</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $pelamar->gendre_user }}"
                                name="gendre_user" id="gendre_user">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Email</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $pelamar->email_user }}"
                                name="email_user" id="email_user">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">No tlfn</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $pelamar->no_tlp }}"
                                name="no_tlp" id="no_tlp">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">tanggal lahir</label>
                            <input type="date" class="form-control" placeholder="" value="{{ $pelamar->tgl_lahir }}"
                                name="tgl_lahir" id="tgl_lahir">
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

                        <div class="mb-3 mt-3">
                            <label for="judul">Nama Pelamar</label>
                            <input type="file" class="form-control-file" id="judul" placeholder=""
                                value="{{ $pelamar->judul }}" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
