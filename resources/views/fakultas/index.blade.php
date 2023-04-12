@extends('master')
@section('title')
    <title>fakultas</title>
@endsection
@section('body')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Fakultas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (auth()->user()->role == 'Admin')
                        <p><a href="{{ route('fakultas.create') }}" class="btn btn-success">Tambah Data Fakultas</a></p>
                    @endif
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Fakultas</th>
                                @if (auth()->user()->role == 'Admin')
                                    <th>Edit</th>
                                    <th>Delete</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fakultas as $fk)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $fk->nama_fakultas }}</td>
                                    @if (auth()->user()->role == 'Admin')
                                        <td><a href="{{ route('fakultas.edit', $fk->id) }}" class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah anda yakin?');"
                                                action="{{ route('fakultas.destroy', $fk->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                    @endif
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Fakultas</th>
                                @if (auth()->user()->role == 'Admin')
                                    <th>Edit</th>

                                    <th>Delete</th>
                                @endif
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
