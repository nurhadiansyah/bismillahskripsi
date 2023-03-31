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
            <form class="form-horizontal" method="post" action="{{route('Jimunisasi.store')}}">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-2 control-label" for="nama_imun">Nama Imunisasi</label>
                        <div class="input-group col-md-8">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-eyedropper" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Nama Imunisasi" name="nama_imun" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-2 control-label" for="umur">Umur</label>
                        <div class="input-group col-md-8">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-list-ol" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" placeholder="Umur" name="umur" required>
                                <span class="input-group-text"> Bulan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4 control-label" for="name"></label>
                        <div class="input-group col-md-8">
                            <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
                            <a href="//" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- bagian view --}}
    <div class="card shadow mb-2">
        <div class="card-header py-3">
            {{-- <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title" style="margin-right: 40px"><a href="//" class="btn btn-sm btn-primary"><span><i class="fa fa-plus-square" aria-hidden="true"></i></span> Tambah Data</a> | Jenis Imunisasi</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row" style="margin: 5px;">
                                @foreach($data as $datas):
                                    @if(count($data) >= 1)
                                    
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <div class="box box-primary">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title">{{ $datas->nama_imun }}</h3>
                                                    <div class="box-tools pull-right">
                                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <!-- /.box-tools -->
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    Umur : {{ $datas->umur }} Bulan
                                                    <div class="pull-right">
                                                        <form action="{{ route('Jimunisasi.destroy', $datas->id_j_imun) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <div class="btn-group">
                                                                <a href="{{ route('Jimunisasi.edit', $datas->id_j_imun) }}" class=" btn btn-sm btn-default" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                                                <button class="btn btn-sm btn-default" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                            </div>
                                        </div>
                                    @else                                
                                    <div class="col-12">
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <h4 style="text-align: center;">Data Kosong</h4>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach; --}}
                            {{-- </div> --}}
                            <div class="card-body">
                                <div class="table-responsive">
                             <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;text-align: center;">No</th>
                                        <th style="width: 35%;text-align: center;">Nama Imunisasi</th>
                                        <th style="width: 35%;text-align: center;">Umur</th>
                                        <th style="width: 25%;text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data as $datas)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $datas->nama_imun }}</td>
                                        <td>{{ $datas->umur }} Bulan</td>
                                        <td>
                                            <form action="{{ route('Jimunisasi.destroy', $datas->id_j_imun) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="btn-group">
                                                    <button class="btn btn-danger btn-circle" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="fa-solid fa-trash"></span></button>
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
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection