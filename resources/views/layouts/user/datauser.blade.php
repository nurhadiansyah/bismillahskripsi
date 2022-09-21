@extends('layouts/master')

@section('content')
<table id="example1" class="table table-bordered table-striped">
<thead>
    <tr>
        <th style="width: 5%;text-align: center;">#</th>
        <th style="width: 27%;text-align: center;">Nama</th>
        <th style="width: 27%;text-align: center;">Email</th>
        <th style="width: 26%;text-align: center;">Level</th>
        <th style="width: 15%;text-align: center;">Aksi</th>
        <th style="text-align: center;">#</th>
        <th style="text-align: center;">Nama</th>
        <th style="text-align: center;">Email</th>
        <th style="text-align: center;">Level</th>
        <th style="text-align: center;">PWD</th>
        <th style="text-align: center;">Aksi</th>
    </tr>
</thead>
<!-- <tbody>
    {{-- @php $no = 1; @endphp
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
                    <a href="{{ route('pengguna.edit', $datas->id) }}" class=" btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="{{ route('generatePwd', $datas->id) }}" class=" btn btn-sm btn-info" data-toggle="tooltip" title="Paswword Baru"><span class="glyphicon glyphicon-wrench"></span></a>
                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </form>
        </td>
    </tr>
    @endforeach --}}
</tbody> -->
<tfoot>
    <tr>
        <th style="text-align: center;">#</th>
        <th style="text-align: center;">Nama</th>
        <th style="text-align: center;">Email</th>
        <th style="text-align: center;">Level</th>
        <th style="text-align: center;">PWD</th>
        <th style="text-align: center;">Aksi</th>
    </tr>
</tfoot>
</table>
@endsection