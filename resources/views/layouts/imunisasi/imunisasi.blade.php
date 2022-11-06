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
            <h6 class="m-0 font-weight-bold text-primary">Imunisasi</h6>
            <a href="Imunisasis/create" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
            <a href="Imunisasis/show" target="_blank" class="btn btn-success btn-icon-split">
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
                            <tr>
                                <th>No</th>
                                <th>Nama Anak</th>
                                <th>Nama Imunisasi</th>
                                <th>Tanggal Imunisasi</th>
                                <th>Booster</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $datas)
                        @csrf
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $datas->nama_anak }}</td>
                            <td>{{ $datas->nama_imun }}</td>
                            <td>{{ $datas->tgl_imun }}</td>
                            <td>{{ $datas->booster }}</td>
                            <td>{{ $datas->ket_imun }}</td>
                            <td>
                                <form action="{{ route('Imunisasis.destroy', $datas->id_imun) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group">
                                        <a href="{{ route('Imunisasis.edit', $datas->id_imun) }}" class=" btn btn-circle btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="fa-solid fa-pencil"></span></a>
                                        <button class="btn btn-sm btn-circle btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="fa-solid fa-trash"></span></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection