@extends('layouts/master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        <a href="pengguna/create" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Data</span>
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width:5% ;text-align:center">No</th>
                <th style="width:27% ;text-align:center">Nama</th>
                <th style="width:27% ;text-align:center">Email</th>
                <th style="width:20%; text-align:center">password</th>
                <th style="width:26% ;text-align:center">Level</th>
                <th style="width:15% ;text-align:center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; 
            @endphp
            @foreach($data as $datas)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $datas->nama_ibu }}</td>
                <td>{{ $datas->email }}</td>
                <td>
                    @if ($datas->level == 1)
                        <span class="label label-primary">
                            {{ 'Admin' }}
                        </span>
                    @else
                        <span class="label label-success">
                            {{ 'User Ibu' }}
                        </span>
                    @endif
                    </span>
                </td>
                <td>{{ ($datas->password) }}</td>
                <td>
                    <form action="{{ route('pengguna.destroy', $datas->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="btn-group">
                            <a href="{{ route('pengguna.edit', $datas->id) }}" class=" btn btn-circle btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="fa-solid fa-pencil"></span></a>
                            {{-- <a  class=" btn btn-sm btn-info" data-toggle="tooltip" title="Paswword Baru"><span class="glyphicon glyphicon-wrench"></span></a> --}}
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

</table>
@endsection