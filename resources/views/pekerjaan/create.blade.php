@extends('master')
@section('title')
<title>Create pekerjaan</title>
@endsection
@section('body')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Data pekerjaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('pekerjaan.store') }} " method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                      <label for="judul">Nama pekerjaan</label>
                      <input type="text" class="form-control" id="judul" placeholder="" value=""  name="nama_pekerjaan">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    </section>
@endsection