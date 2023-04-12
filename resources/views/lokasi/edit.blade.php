@extends('master')
@section('title')
<title>Edit lokasi</title>
@endsection
@section('body')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Edit Data lokasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('lokasi.update', $lokasi->id) }}  " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mt-3">
                      <label for="judul">Nama lokasi</label>
                      <input type="text" class="form-control" id="judul" placeholder=""  value="{{ $lokasi->nama_lokasi }}"  name="nama_lokasi">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    </section>
@endsection