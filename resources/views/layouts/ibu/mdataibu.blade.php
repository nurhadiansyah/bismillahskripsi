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
            
            <h6 class="m-0 font-weight-bold text-primary">Data Ibu</h6>
            <a href="ibus/create" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">tambah data</span></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>nama ibu</th>
                            <th>nama ayah</th>
                            <th>alamat</th>
                            <th>No Bpjs</th>
                            <th>status gakin</th> 
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; 
                        @endphp
                        @foreach($data as $datas)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $datas->nama_ibu }}</td>
                            <td>{{ $datas->nama_suami }}</td>
                            <td>{{ $datas->alamat }} Rt {{ $datas->rt }}/Rw {{ $datas->rw }}</td>
                            <td>
                                @if ($datas->No_BPJS == null)
                                    <p style="text-align: center; color: #9ca4af;">Tidak Ada</p>
                                @else
                                    {{ $datas->No_BPJS }}
                                @endif
                            </td>
                            <td style="text-align: center;">
                                @if ($datas->gakin == 0)
                                    Non Gakin
                                @else
                                    Gakin
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <form action="{{ route('ibus.destroy', $datas->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group">
                                        <a href="{{ route('ibus.edit', $datas->id) }}" class="btn btn-warning btn-circle " data-toggle="tooltip" title="Edit"><span ><i class="fa-solid fa-pencil"></i></span></a>
                                        <button class="btn btn-danger btn-circle" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="fas fa-trash"></span></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>nama ibu</th>
                            <th>nama ayah</th>
                            <th>alamat</th>
                            <th>No Bpjs</th>
                            <th>Status gakin</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    
                </table>
            </div>
        </div>
    </div>

</div>
@endsection