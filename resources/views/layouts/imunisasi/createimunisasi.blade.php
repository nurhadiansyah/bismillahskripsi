@extends('layouts/master')

@section('content')
<div class="card shadow mb-1">
    <div class="card-header py-2">
        <form class="form-horizontal" method="post" action="{{ route('Imunisasis.store') }}">
            @csrf
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 control-label" for="id_anak">Nama Anak</label>
                    <div class="input-group col-md-10">
                        <div class="input-group-prepend ">
                            <span class="input-group-text  "><i class="fa fa-child"></i></span>
                            <select class="form-control select2 " name="id_anak" style="width: 100%;" required>
                                <option selected="selected" value="">-- Nama Anak --</option>
                                @foreach($data as $datas)
                                    <option value="{{ $datas->id_anak }}">{{ $datas->nama_anak }} - {{ $datas->nama_ibu }} & {{ $datas->nama_suami }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 control-label" for="id_j_imun">Nama Imunisasi</label>
                    <div class="input-group col-md-10">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-child"></i></span>
                            <select class="form-control select2" name="id_j_imun[]" multiple="multiple" data-placeholder="Nama Imunisasi" style="max-width: 100%">
                                @foreach($data2 as $datas2)
                                    <option value="{{ $datas2->id_j_imun }}">{{ $datas2->nama_imun }}</option>
                                @endforeach
                            </select>
                        </div>
                        <p style="color: grey">Note : Pilih salah satu</p>
                    </div>
                </div>
            </div>
            <div class="form-group form-inline">
                <div class="row">
                    <label class="col-md-4 control-label" for="tgl_imun">Tanggal Imunisasi</label>
                    <div class="input-group col-md-8">
                        <div class="input-group date">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" placeholder="yyyy/mm/dd" name="tgl_imun" required autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 control-label" for="booster">Booster</label>
                    <div class="input-group col-md-8">
                        <div class="form-check-inline">
                            <label class="form-check-label" style="padding: 6px 10px 0px 0px;">
                                <input type="radio" name="booster" class="form-check-input minimal" value="Ya" required> Ya
                            </label>
                            <label class="form-check-label">
                                <input type="radio" name="booster" class="form-check-input minimal" value="Tidak" required> Tidak
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-2 control-label" for="ket_imun">Keterangan</label>
                    <div class="input-group col-md-8">
                        <textarea class="form-control" rows="4" id="keterangan" name="ket_imun"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-4 control-label" for="name"></label>
                    <div class="input-group col-md-8">
                        <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
                        <a href="{{route('Imunisasis.index')}}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection