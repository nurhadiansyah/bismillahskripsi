@extends('layouts/master')

@section('content')
<div class="container-fluid">

    {{-- <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data </h1>
    <p class="mb-4"> <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kader</h6>
            <a href="createkader" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">tambah data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%;text-align: center;">No</th>
                            <th style="width: 15%;text-align: center;">Nama Kader</th>
                            <th style="width: 15%;text-align: center;">Tempat/Tgl Lahir</th>
                            <th style="width: 23%;text-align: center;">Alamat</th>
                            <th style="width: 15%;text-align: center;">Jabatan</th>
                            <th style="width: 14%;text-align: center;">No. Telp</th>
                            <th style="width: 13%;text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}
                    
                </table>
            </div>
        </div>
    </div>

</div>
@endsection