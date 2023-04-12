@extends('master')
@section('title')
<title>prodi</title>
@endsection
@section('body')
<section class="content">
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data prodi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <p><a href="{{ route('studi.create') }}" class="btn btn-success">Tambah Data prodi</a></p>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama prodi</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach($prodi as $fk)
            <tr>
              <td>{{ $loop->index +1}}</td>
              <td>{{ $fk->nama_prodi }}</td>
              <td><a href="{{ route('studi.edit', $fk->id) }}" class="btn btn-warning">Edit</a> </td>
<td>
<form onsubmit="return confirm('Apakah anda yakin?');" action="{{  route('studi.destroy', $fk->id) }}"  method="POST">
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
              <th>Nama prodi</th>
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