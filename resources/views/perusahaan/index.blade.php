@extends('master')
@section('title')
<title>perusahaan</title>
@endsection
@section('body')

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data lokasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <p><a href="{{ route('perusahaan.create') }}" class="btn btn-success">Tambah Data Perusahaan</a></p>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Jenis Perusahaan</th>
                  <th>Email Perusahaan</th>
                  <th>No Telepon Perusahaan</th>
                  <th>Alamat Perusahaan</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($perusahaan as $fk)
                <tr>
                  <td>{{ $loop->index +1}}</td>
                  <td>{{ $fk->nama_perusahaan }}</td>
                  <td>{{ $fk->kategori->nama_kategori }}</td>
                  <td>{{ $fk->email_perusahaan }}</td>
                  <td>{{ $fk->no_tlpn }}</td>
                  <td>{{ $fk->alamat_perusahaan }}</td>
                  <td><a href="{{ route('perusahaan.edit', $fk->id) }}" class="btn btn-warning">Edit</a> </td>
    <td>
    <form onsubmit="return confirm('Apakah anda yakin?');" action="{{  route('perusahaan.destroy', $fk->id) }}"  method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Jenis Perusahaan</th>
                    <th>Email Perusahaan</th>
                    <th>No Telepon Perusahaan</th>
                    <th>Alamat Perusahaan</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    </section>
@endsection