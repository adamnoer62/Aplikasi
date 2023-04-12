@extends('master')
@section('title')
<title>Create Perusahaan</title>
@endsection
@section('body')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Data Perusahaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('perusahaan.store') }} " method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                      <label for="judul">Nama Perusahaan</label>
                      <input type="text" class="form-control" id="judul" placeholder="" value=""  name="nama_perusahaan">
                    </div>
                    <div class="form-group mb-3">
                        <label>Nama Kategori</label>
                        <select class="form-control" name="kategori_id">
                        <option value="">Pilih Nama Kategori</option>
                        @foreach($kategori as $k)
                        <option value="{{ $k->id }}">
                        {{ $k->nama_kategori }}
                        </option>
                        @endforeach
                    </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="judul">Email Perusahaan</label>
                        <input type="text" class="form-control" id="judul" placeholder="" value=""  name="email_perusahaan">
                      </div>
                      <div class="mb-3 mt-3">
                        <label for="judul">No tlpn Perusahaan</label>
                        <input type="text" class="form-control" id="judul" placeholder="" value=""  name="no_tlpn">
                      </div>
                      <div class="mb-3 mt-3">
                        <label for="judul">Alamat Perusahaan</label>
                        <input type="text" class="form-control" id="judul" placeholder="" value=""  name="alamat_perusahaan">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    </section>
@endsection