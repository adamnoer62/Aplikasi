@extends('master')
@section('title')
<title>Create Keahlian</title>
@endsection
@section('body')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Data Keahlian</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('keahlian.store') }} " method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                      <label for="judul">Nama Keahlian</label>
                      <input type="text" class="form-control" id="judul" placeholder="" value=""  name="nama_keahlian">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    </section>
@endsection