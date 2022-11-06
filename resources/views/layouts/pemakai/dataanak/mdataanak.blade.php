@extends('layouts/masteruser')

@section('contentuser') 
<div class="container-fluid">
<div>
    <!-- DataTales Example -->
    <div class="card shadow mb-1">
        <div class="card-header py-2">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 5%; text-align: center;">No</th>
                        <th style="width: 5%; text-align: center;">Anak</th>
                        <th style="width: 15%; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($data as $datas)
                    <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $datas->nama_anak }}</td>
                    <td> 
                        <form action="{{ route('pemakai.show', $datas->id_anak) }}" method="get">
                        <div class="btn-group">
                            <button class="btn  btn-info btn-circle" type="submit" data-toggle="tooltip" title="Hapus"><span class="fa-solid fa-trash"></span></button>
                        </div>
                        </form>
                    </td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection