@extends('master')
@section('title')
    <title>Lowongan</title>
@endsection
@section('body')
    <section class="content">
        <div class="container-fluid">
            @if (auth()->user()->role == 'Admin' || auth()->user()->role == 'Perusahaan')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data lokasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <p><a href="{{ route('lowongan.create') }}" class="btn btn-success">Tambah Data lokasi</a></p>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>judul lowongan</th>
                                    <th>lokasi</th>
                                    <th>Pekerjaan</th>
                                    <th>Tanggal Pasang</th>
                                    <th>Salary</th>
                                    <th>Job Time</th>
                                    <th>Ipk</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    @if (auth()->user()->role == 'Admin')
                                        <th>button</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @if (auth()->user()->role == 'Perusahaan')
                                    @foreach ($lowongan as $lk)
                                        @if ($lk->status == 1)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $lk->judul_lowongan }}</td>
                                                <td>{{ $lk->lokasi->nama_lokasi }}</td>
                                                <td>{{ $lk->pekerjaan->nama_pekerjaan }}</td>
                                                <td>{{ $lk->tgl_pasang }}</td>
                                                <td>{{ $lk->salary }}</td>
                                                <td>{{ $lk->job_time }}</td>
                                                <td>{{ $lk->ipk }}</td>
                                                <td>
                                                    <span class="badge badge-success">berhasil</span>
                                                </td>
                                                <td><a href="{{ route('lowongan.edit', $lk->id) }}"
                                                        class="btn btn-warning">Edit</a></td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah anda yakin?');"
                                                        action="{{ route('lowongan.destroy', $lk->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                @if (auth()->user()->role == 'Admin')
                                    @foreach ($lowongan as $lk)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $lk->judul_lowongan }}</td>
                                            <td>{{ $lk->lokasi->nama_lokasi }}</td>
                                            <td>{{ $lk->pekerjaan->nama_pekerjaan }}</td>
                                            <td>{{ $lk->tgl_pasang }}</td>
                                            <td>{{ $lk->salary }}</td>
                                            <td>{{ $lk->job_time }}</td>
                                            <td>{{ $lk->ipk }}</td>
                                            <td>
                                                @if ($lk->status == 1)
                                                    <span class="badge badge-success">berhasil</span>
                                                @elseif ($lk->status == 0)
                                                    <span class="badge badge-warning text-dark">pending</span>
                                                @else
                                                    <span class="badge badge-danger">gagal</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('lowongan.edit', $lk->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah anda yakin?');"
                                                    action="{{ route('lowongan.destroy', $lk->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('lowongan.updatestatus', $lk->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status"
                                                        value="{{ $lk->status == 1 ? 2 : 1 }}">
                                                    <button type="submit"
                                                        class="btn {{ $lk->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                                        {{ $lk->status == 1 ? 'Berhasil' : 'Gagal' }}
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>judul lowongan</th>
                                    <th>lokasi</th>
                                    <th>Pekerjaan</th>
                                    <th>Tanggal Pasang</th>
                                    <th>Salary</th>
                                    <th>Job Time</th>
                                    <th>Ipk</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    @if (auth()->user()->role == 'Admin')
                                        <th>button</th>
                                    @endif
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
        </div>
        @endif

        {{--  <div class="container-fluid">
            <div class="row">
                @foreach ($lowongan as $lk)
                    @if ($lk->status == 1)
                        <div class="col-md-4">
                            <div class="card p-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">{{ $lk->lokasi->nama_lokasi }}</h6>
                                            <span>{{ $lk->tgl_pasang }}</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>{{ $lk->pekerjaan->nama_pekerjaan }}</span> </div>
                                </div>
                                <div class="mt-5">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt_Joo3UpCYJ2dve2fZYq38XZXEexQVlllSA&usqp=CAU"
                                        style="width:50%" alt="">
                                    <h3 class="heading" align="right">{{ $lk->judul_lowongan }} </h3>
                                    <div class="mt-5">

                                        <div class="mt-3"> <span class="text1">{{ $lk->salary }} <br> <span
                                                    class="text2">{{ $lk->job_time }}</span></span> </div>
                                    </div>
                                    <div class=" d-flex justify-content-end"><a href="{{ route('pelamar.create') }}"
                                            class="btn btn-success">Masukkan Lamaran</a> </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>  --}}
        <div class="row">
            @foreach ($lowongan as $lk)
                @if ($lk->status == 1)
                    <div class="col-md-4">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h1 style="font-size: 20px; color:#0275d8">{{ $lk->judul_lowongan }}</h1>
                                        <h6 class="digital mb-0"><b>{{ $lk->pekerjaan->nama_pekerjaan }}</b></h6>
                                        <p class="card-text"><small class="text-muted">Last updated
                                                {{ $lk->tgl_pasang }}</small>
                                        </p>
                                        <p class="card-text   mb-0">Gaji : Rp <?php echo number_format($lk->salary, 0, ',', '.'); ?></p>
                                        <p class="card-text">Tipe Pekerjaan : {{ $lk->job_time }} </p>
                                        <a href="{{ route('pelamar.create') }}">Masukan Lamaran</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Eiffel_Tower_Vertical.JPG/802px-Eiffel_Tower_Vertical.JPG?20080622213711"
                                        class="img-fluid rounded-start" alt="..."
                                        style="max-width: 100%; height: 100%;  ">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </section>


    <link
        href="https://www.dafontfree.net/embed/a2VwbGVyLXN0ZC1ib2xkLXNlbWljb25kZW5zZWQtc3ViaGVhZCZkYXRhLzQ3L2svNTc2ODcvS2VwbGVyU3RkLUJvbGRTY25TdWJoLm90Zg"
        rel="stylesheet" type="text/css" />

@endsection
