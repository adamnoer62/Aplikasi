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
                    <form action="{{ route('pelamar.store') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="judul">Nama Pelamar</label>
                            <input type="text" class="form-control" id="judul" placeholder=""
                                value="{{ Auth::user()->name }}" name="nama_pelamar_user" readonly>
                        </div>
                        <div class="mb-3 mt-3" hidden>
                            <label for="judul">ID</label>
                            <input type="text" class="form-control" id="user_id" placeholder=""
                                value="{{ Auth::user()->id }}" name="user_id">
                        </div>
                        <div class="form-group mb-3">
                            <label>Prodi</label>
                            <select class="form-control" name="studi_id" id="studi_id" readonly>
                                @foreach ($studi as $k)
                                    <option value="{{ $k->id }}" @if ($k->id == Auth::user()->studi_id) selected @endif>
                                        {{ $k->nama_prodi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Fakultas</label>
                            <select class="form-control" name="fakultas_id" id="fakultas_id" readonly>
                                @foreach ($fakultas as $k)
                                    <option value="{{ $k->id }}" @if ($k->id == Auth::user()->fakultas_id) selected @endif>
                                        {{ $k->nama_fakultas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{--
                        <div class="mb-3 mt-3">
                            <label for="judul">Prodi</label>
                            <input type="text" class="form-control" id="prodi" placeholder=""
                                value="{{ $user->studi_id }} " name="studi_id" readonly>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="judul">falkutas</label>
                            <input type="text" class="form-control" id="fakultas_id" placeholder=""
                                value="{{ $user->fakultas_id }}" {{ $user->nama_fakultas }}name="fakultas_id" readonly>
                        </div>  --}}
                        <div class="mb-3 mt-3">
                            <label for="judul">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="judul" placeholder=""
                                value="{{ Auth::user()->gendre }}" name="gendre_user" readonly>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Email User</label>
                            <input type="text" class="form-control" id="judul" placeholder=""
                                value="{{ Auth::user()->email }}" name="email_user" readonly>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">No Telpone</label>
                            <input type="text" class="form-control" id="judul" placeholder=""
                                value="{{ Auth::user()->no_tlp }}" name="no_tlp" readonly>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Tangal lahir</label>
                            <input type="date" class="form-control" id="judul" placeholder="" value=""
                                name="tgl_lahir">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="judul">Nama Pelamar</label>
                            <input type="file" class="form-control-file" id="judul" placeholder="" value=""
                                name="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
