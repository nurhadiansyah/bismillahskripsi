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
            <form class="form-horizontal" method="post" action="{{route('Jimunisasi.Store')}}">
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
</div>

@endsection