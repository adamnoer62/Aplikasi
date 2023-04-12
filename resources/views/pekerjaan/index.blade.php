@extends('master')
@section('title')
<title>pekerjaan</title>
@endsection
@section('body')
<section class="content">
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data pekerjaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <p><a href="{{ route('pekerjaan.create') }}" class="btn btn-success">Tambah Data pekerjaan</a></p>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama pekerjaan</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach($pekerjaan as $fk)
            <tr>
              <td>{{ $loop->index +1}}</td>
              <td>{{ $fk->nama_pekerjaan }}</td>
              <td><a href="{{ route('pekerjaan.edit', $fk->id) }}" class="btn btn-warning">Edit</a> </td>
<td>
<form onsubmit="return confirm('Apakah anda yakin?');" action="{{  route('pekerjaan.destroy', $fk->id) }}"  method="POST">
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
              <th>Nama pekerjaan</th>
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