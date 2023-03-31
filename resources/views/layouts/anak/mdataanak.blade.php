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
            <h6 class="m-0 font-weight-bold text-primary">Data Anak</h6>
            <a href="anaks/create" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
            <a href="anaks/show" target="_blank" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-print"></i>
                </span>
                <span class="text">Cetak Data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align: center;">No</th>
                            <th style="width: 20%; text-align: center;">Nama Anak</th>
                            <th style="width: 35%; text-align: center;">Orang Tua</th>
                            <th style="width: 12%; text-align: center;">Jenis Kelamin</th>
                            <th style="width: 10%; text-align: center;">Tgl Lahir</th>
                            <th style="width: 3%; text-align: center;">KMS</th>
                            <th style="width: 15%; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $datas)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td style="text-transform: capitalize">{{ $datas->nama_anak }}</td>
                            <td style="text-transform: capitalize">{{ $datas->nama_ibu }} & {{ $datas->nama_suami }}</td>
                            <td>
                                @if ($datas->jenis_kelamin == 0)
                                    Laki-Laki
                                @else
                                    Perempuan
                                @endif
                            </td>
                            <td>{{ $datas->tgl_lhr }}</td>
                            <td>
                                @if ($datas->KMS == 0)
                                    <i class="fa fa-check-circle-o fa-lg" aria-hidden="true" style="color: green"></i>
                                @else
                                    <i class="fa fa-times-circle-o fa-lg" aria-hidden="true" style="color: red"></i>
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <form action="{{ route('anaks.destroy', $datas->id_anak) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group">
                                        <a href="{{ route('anaks.edit', $datas->id_anak) }}" class=" btn btn-warning btn-circle" data-toggle="tooltip" title="Edit"><span class="fa-solid fa-pencil"></span></a>
                                        <a href="{{ route('Kms.show',$datas->id_anak) }}" class=" btn btn-info btn-circle" data-toggle="tooltip" title="detail"><span class="fa-solid fa-info"></span></a>
                                        <button class="btn  btn-danger btn-circle" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="fa-solid fa-trash"></span></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
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