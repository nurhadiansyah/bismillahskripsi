@extends('layouts/master')

@section('content')
<div class="container-fluid">

    {{-- <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data </h1>
    <p class="mb-4"> <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<div>
    <!-- DataTales Example -->
    <div class="card shadow mb-1">
        <div class="card-header py-2">
            
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anak</th>
                        <th>Umur</th>
                        <th>BB/TB</th>
                        <th>Tanggal Timbang</th>
                        <th>Status Gizi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1; 
                    @endphp
                    @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->nama_anak }}</td>
                        <td>{{ $datas->umur }} Bulan</td>
                        <td>
                            {{ $datas->berat_badan }} Kg/{{ $datas->tinggi_badan }} cm
                        </td>
                        <td>{{ $datas->tgl_timbang }}</td>
                        <td>{{ $datas->status_gizi }}</td>
                        <td>{{ $datas->ket_timbang }}</td>
                        <td>
                            <!-- <form action="{{ route('tanak.destroy', $datas->id_timbang) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }} -->
                                <div class="btn-group">
                                    <a href="{{ route('tanak.edit', $datas->id_timbang) }}" class=" btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                    <!-- <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></button> -->
                                </div>
                            <!-- </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nama Anak</th>
                        <th>Umur</th>
                        <th>BB/TB</th>
                        <th>Tanggal Timbang</th>
                        <th>Status Gizi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</div>

@endsection