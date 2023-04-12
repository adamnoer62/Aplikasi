@extends('master')
@section('title')
    <title>Pelamar</title>
@endsection
@section('body')
    @if (auth()->user()->role == 'Admin')
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pelamar</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelamar</th>
                                    <th>Program Studi</th>
                                    <th>Fakultas</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>No Telp</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Status</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelamar as $p)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $p->nama_pelamar_user }}</td>
                                        <td>{{ $p->studi->nama_prodi }}</td>
                                        <td>{{ $p->fakultas->nama_fakultas }}</td>
                                        <td>{{ $p->gendre_user }}</td>
                                        <td>{{ $p->email_user }}</td>
                                        <td>{{ $p->no_tlp }}</td>
                                        <td>{{ $p->tgl_lahir }}</td>
                                        <td>
                                            @if ($p->status == 1)
                                                <span class="badge badge-success">Berhasil</span>
                                            @elseif ($p->status == 0)
                                                <span class="badge badge-warning">Diproses</span>
                                            @else
                                                <span class="badge badge-danger">Gagal</span>
                                            @endif
                                        </td>
                                        <td><a href="{{ asset('storage/' . $p->file) }}"><button class="btn btn-success"
                                                    type="button">Download</button></a>
                                        </td>
                                        @if (auth()->user()->role == 'Admin')
                                            <td>
                                                <a href="{{ route('pelamar.edit', $p->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form onsubmit="return confirm('Apakah anda yakin?');"
                                                    action="{{ route('pelamar.destroy', $p->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                <form action="{{ route('pelamar.updatestatus', $p->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status"
                                                        value="{{ $p->status == 1 ? 2 : 1 }}">
                                                    <button type="submit"
                                                        class="btn {{ $p->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                                        {{ $p->status == 1 ? 'Berhasil' : 'Gagal' }}
                                                    </button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
    @endif
    @if (auth()->user()->role == 'User')
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pelamar</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelamar</th>
                                    <th>Program Studi</th>
                                    <th>Fakultas</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>No Telp</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Status</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelamar as $p)
                                    @if ($p->user_id == auth()->user()->id)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $p->nama_pelamar_user }}</td>
                                            <td>{{ $p->studi->nama_prodi }}</td>
                                            <td>{{ $p->fakultas->nama_fakultas }}</td>
                                            <td>{{ $p->gendre_user }}</td>
                                            <td>{{ $p->email_user }}</td>
                                            <td>{{ $p->no_tlp }}</td>
                                            <td>{{ $p->tgl_lahir }}</td>
                                            <td>
                                                @if ($p->status == 1)
                                                    <span class="badge badge-success">Berhasil</span>
                                                @elseif ($p->status == 0)
                                                    <span class="badge badge-warning">Diproses</span>
                                                @else
                                                    <span class="badge badge-danger">Gagal</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('download', $p->id) }}">
                                                    <button class="btn btn-success" type="button">Download</button>
                                                </a>
                                            </td>

                                            @if (auth()->user()->role == 'Admin')
                                                <td>
                                                    <a href="{{ route('pelamar.edit', $p->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <form onsubmit="return confirm('Apakah anda yakin?');"
                                                        action="{{ route('pelamar.destroy', $p->id) }}" method="POST"
                                                        style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                    <form action="{{ route('pelamar.updatestatus', $p->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status"
                                                            value="{{ $p->status == 1 ? 2 : 1 }}">
                                                        <button type="submit"
                                                            class="btn {{ $p->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                                            {{ $p->status == 1 ? 'Berhasil' : 'Gagal' }}
                                                        </button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
    @endif
@endsection
