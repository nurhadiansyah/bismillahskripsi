<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>posyandu</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('template/vendor/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/dcd0634efd.js" crossorigin="anonymous"></script>
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href='dashboard'>
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PELAYANAN POSYANDU</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href='dashboard'>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item"  href="/ibus"> <span> Data Ibu </span></a>
                        <a class="collapse-item" href="/anaks"><span> Anak</span></a>
                        <a class="collapse-item" href="/Jimunisasi">Jenis Imunisasi</a>
                        {{-- <a class="collapse-item" href="datakaders">Data Kader</a> --}}
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Penimbangan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('tanak.create')}}">Timbang Anak</a>
                        <a class="collapse-item" href="/tanak">Data Timbang</a>
                    </div>
                </div>
            </li>

            

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/Imunisasis">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Imunisasi</span></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/duser">
                    <i class="fas fa-fw fa-table"></i>
                    <span> agenda</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="/laporan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>laporan</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/pengguna">
                    <i class="fas fa-fw fa-table"></i>
                    <span> Data User</span></a>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" class="topright">

            <!-- Main Content -->
            <div >

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="content" position="absolute" top="8px" right="16px" font-size="18px">

                    <!-- Sidebar Toggle (Topbar) -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow" >
                            
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{Auth::user()->nama_ibu}}
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('template/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item">
                                <span >
                                    <p>{{Auth::user()->nama_ibu}}</p>
                                </span>
                                    </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-circle text-success"></i> 
                                        @if (Auth::user()->level == 1)
                                            Admin
                                        @else
                                            User
                                        @endif
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        
                        </li>
                    
                    </ul>

                </nav>
                <!-- End of Topbar -->
<!-- isi konten di sini -->
<div class="content">
        @yield('content')
</div>
                <!-- Begin Page Content -->
                
                <!-- /.container-fluid --> 

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white" class="footer" >
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nurhadiansyah</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logins.index')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('template/js/demo/chart-pie-demo.js')}}"></script>
    
     <!-- jQuery 3 -->
     <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="{!! asset('bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>
     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     <script>
         $.widget.bridge('uibutton', $.ui.button);
     </script>
     <!-- Bootstrap 3.3.7 -->
     <script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
     <!-- Sparkline -->
     <script src="{!! asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}"></script>
     <!-- jvectormap -->
     <script src="{!! asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
     <script src="{!! asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
     <!-- jQuery Knob Chart -->
     <script src="{!! asset('bower_components/jquery-knob/dist/jquery.knob.min.js') !!}"></script>
     <!-- daterangepicker -->
     <script src="{!! asset('bower_components/moment/min/moment.min.js') !!}"></script>
     <script src="{!! asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>
     <!-- datepicker -->
     <script src="{!! asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
     <!-- Bootstrap WYSIHTML5 -->
     <script src="{!! asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
     <!-- Slimscroll -->
     <script src="{!! asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}"></script>
     <!-- FastClick -->
     <script src="{!! asset('bower_components/fastclick/lib/fastclick.js') !!}"></script>
     <!-- AdminLTE App -->
     <script src="{!! asset('dist/js/adminlte.min.js') !!}"></script>
     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <!-- <script src="{!! asset('dist/js/pages/dashboard.js') !!}"></script> -->
     <!-- AdminLTE for demo purposes -->
     <!-- <script src="{!! asset('dist/js/demo.js') !!}"></script> -->
 
     <script>
         /** tambah class active jika di klik */
         var url = window.location;
         // ini untuk menambahkan class active pada menu yg tidak memiliki anak atau single link
         $('ul.sidebar-menu a').filter(function() {
             return this.href == url;
         }).parent().addClass('active');
         // ini untuk menu beranak, jadi otomatis akan terbuka sesuai dengan link tujuan
         $('ul.treeview-menu a').filter(function() {
             return this.href == url;
         }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
     </script>
 
    <script src="{{asset ('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>


    {{-- PWA  --}}
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

@yield('java')

<style>    
    .topright {
      position: absolute;
      top: -5px;
      right: 16px;
      font-size: 18px;
    }

    </style>
<style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      color: white;
      text-align: center;
    }
    </style>

</body>


</html>