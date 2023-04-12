@extends('master')
@section('title')
<title>Edit keahlian</title>
@endsection
@section('body')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Edit Data keahlian</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('keahlian.update', $keahlian->id) }}  " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mt-3">
                      <label for="judul">Nama keahlian</label>
                      <input type="text" class="form-control" id="judul" placeholder=""  value="{{ $keahlian->nama_keahlian }}"  name="nama_keahlian">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    </section>
@endsection