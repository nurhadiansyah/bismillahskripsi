
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
            <form class="form-horizontal" method="post" action="{{route('anaks.store')}}">
                @csrf
                <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="nama_anak">Nama Anak</label>
                                <div class="input-group col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-child fa-fw" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Nama Anak" name="nama_anak" required>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="nama_anak">Nama Orang Tua</label>
                                <div class="input-group-prepend col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-venus-mars fa-fw" aria-hidden="true"></i></span>
                                        <select class="form-control select2" name="id_ibu" required>
                                            <option selected="selected" value="">-- Orang Tua --</option>
                                            @foreach($data as $datas)
                                              <option value="{{ $datas->id }}">{{ $datas->nama_ibu }} - {{ $datas->nama_suami }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-inline">
                                <label class="col-md-2 control-label text-right" for="ttl">Tempat, Tanggal Lahir</label>
                                <div class="input-group col-md-10">
                                    <div class="input-group" style="padding-right: 6px;">
                                        <span class="input-group-text"><i class="fa fa-home fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lhr" required>
                                    </div>
                                    <div class="input-group date">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar fa-fw"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker" placeholder="yyyy/mm/dd" name="tgl_lhr" required autocomplete="off">
                                    </div>
                                </div>
                        </div>
                        <div class="form-group form-inline">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="alamat2">Berat dan Tinggi Badan</label>
                                <div class="input-group col-md-10">
                                    <div class="input-group col-md-5" style="padding-right: 6px;">
                                        <span class="input-group-text"><i class="fa fa-balance-scale fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="Berat Badan Lahir" name="bb_lahir" required>
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-long-arrow-up fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="Tinggi Badan Lahir" name="tb_lahir" required>
                                        <span class="input-group-text">cm</span>
                                    </div>
                                    <br/>
                                    <p style="color: grey">Note : Gunakan (.) sebagai pengganti (,)</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="nama_anak">Jenis Kelamin</label>
                                <div class="input-group col-md-8">
                                    <div class="form-check-inline">
                                        <label class="form-check-label" style="padding: 6px 10px 0px 0px;">
                                            <input type="radio" name="jenis_kelamin" class="form-check-input minimal" value="0" required> Laki-Laki
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="jenis_kelamin" class="form-check-input minimal" value="1" required> Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="nama_anak">Anak Ke-</label>
                                <div class="input-group col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-list-ol fa-fw"></i></span>
                                        <input type="number" class="form-control" placeholder="Anak Ke-" name="anak_ke" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="alamat2">Bersalin</label>
                                <div class="input-group col-md-10">
                                    <div class="input-group col-md-5 " style="padding-right: 6px;">
                                        <span class="input-group-text"><i class="fa fa-hotel fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="Jenis Persalinan" name="jenis_persalinan" required>
                                    </div>
                                    <div class="input-group col=md-5">
                                        <span class="input-group-text"><i class="fa fa-hospital-o fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="Tempat Bersalin" name="tempat_persalinan" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="nama_anak">Dokter/Bidan</label>
                                <div class="input-group col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-user-md fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="Dokter/Bidan Pembantu" name="dokter" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="nik">NIK</label>
                                <div class="input-group col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-id-card fa-fw"></i></span>
                                        <input type="number" class="form-control" placeholder="NIK" name="NIK_anak">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label text-right" for="BPJS_anak">Nomor BPJS <small>(bila ada)</small></label>
                                <div class="input-group col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-id-card fa-fw"></i></span>
                                        <input type="number" class="form-control" placeholder="Nomor BPJS (bila ada)" name="BPJS_anak">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-4 control-label" for="name"></label>
                                <div class="input-group col-md-8">
                                    <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
                                    <a href="{{route('anaks.index')}}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection