@extends('master')
@section('title')
<title>Edit kategori</title>
@endsection
@section('body')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Edit Data kategori</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id) }}  " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mt-3">
                      <label for="judul">Nama kategori</label>
                      <input type="text" class="form-control" id="judul" placeholder=""  value="{{ $kategori->nama_kategori }}"  name="nama_kategori">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    </section>
@endsection