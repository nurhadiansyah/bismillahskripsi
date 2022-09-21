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
            <div class="panel-heading">Masukkan Data Timbang</div>
<div class="panel-body">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form class="form-horizontal" method="post" action="//">
                    
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="id_anak">Nama Anak</label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-child fa-fw"></i></span>
                                    <select class="form-control select2" name="id_anak" style="width: 100%;" required>
                                        <option selected="selected" value="">-- Nama Anak --</option>
                                        {{-- @foreach($dataCreate as $datas)
                                            <option value="{{ $datas->id_anak }}">{{ $datas->nama_anak }} - {{ $datas->nama_ibu }} & {{ $datas->nama_suami }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="row">
                            <label class="col-md-2 control-label" for="alamat2">Berat dan Tinggi Badan</label>
                            <div class="input-group col-md-10">
                                <div class="input-group" style="padding-right: 6px;">
                                    <span class="input-group-text"><i class="fa fa-balance-scale fa-fw"></i></span>
                                    <input type="text" class="form-control" placeholder="Berat Badan" name="berat_badan" required>
                                    <span class="input-group-text">Kg</span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-long-arrow-up fa-fw"></i></span>
                                    <input type="text" class="form-control" placeholder="Tinggi Badan" name="tinggi_badan" required>
                                    <span class="input-group-text">cm</span>
                                </div>
                                <br/>
                                <p style="color: grey">Note : Gunakan (.) sebagai pengganti (,)</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="name"></label>
                            <div class="input-group col-md-8">
                                <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
</div>

@endsection