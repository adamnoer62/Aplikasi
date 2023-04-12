
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/tampilan/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/tampilan/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/tampilan/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/tampilan/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/tampilan/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <div class="user-panel d-flex">
        <div class="image">
          <img src="/tampilan/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class=" nav-link d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/tampilan/index3.html" class="brand-link">
      <img src="/tampilan/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Loker Unai</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/tampilan/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="nav-icon far fa-fa-dashboard"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              @if (auth()->user()->role == 'Admin')
              <li class="nav-item">
                <a href="perusahaan" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Perusahaan
                  </p>
                </a>
              </li>
              @endif
              @if (auth()->user()->role == 'Admin')
              <li class="nav-item">
                <a href="lokasi" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Lokasi
                  </p>
                </a>
              </li>
              @endif
              @if (auth()->user()->role == 'Admin')
              <li class="nav-item">
                <a href="keahlian" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Keahlian
                  </p>
                </a>
              </li>
              @endif
              @if (auth()->user()->role == 'Admin')
              <li class="nav-item">
                <a href="pekerjaan" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Pekerjaan
                  </p>
                </a>
              </li>
              @endif
              @if (auth()->user()->role == 'Admin')
              <li class="nav-item">
                <a href="fakultas" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Fakultas
                  </p>
                </a>
              </li>
              @endif
              @if (auth()->user()->role == 'Admin')
              <li class="nav-item">
                <a href="studi" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Program Studi
                  </p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="lowongan" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Lowongan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pelamar" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Pelamar Kerja
                  </p>
                </a>
              </li>
              @if (auth()->user()->role == 'Admin')
              <li class="nav-item">
                <a href="kategori" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Kategori Perusahaan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                @endif
                {{-- <a href="{{ route('logout') }}"

                class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Logout
                  </p>
                </a> --}}
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"> <i class="nav-icon fa-solid fa-power-off"></i>
                     {{ __('Logout') }}

                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    @yield('body')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/tampilan/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/tampilan/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/tampilan/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/tampilan/dist/js/demo.js"></script>
<script src="/tampilan/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/tampilan/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/tampilan/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/tampilan/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/tampilan/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/tampilan/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
