@extends('master')
@section('title')
<title>Edit fakultas</title>
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
                <form action="{{ route('fakultas.update', $fakultas->id) }}  " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mt-3">
                      <label for="judul">Nama Fakultas</label>
                      <input type="text" class="form-control" id="judul" placeholder=""  value="{{ $fakultas->nama_fakultas }}"  name="nama_fakultas">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    </section>
@endsection