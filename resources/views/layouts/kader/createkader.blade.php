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
            <form>
                <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="nama_ibu">Nama Kader</label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-venus fa-fw"></i></span>
                                    <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="nama_suami">Nama Suami</label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-mars fa-fw"></i></span>
                                    <input type="text" class="form-control" placeholder="Nama Suami" name="nama_suami" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="row">
                            <label class="col-md-2 control-label" for="ttl">Tempat, Tanggal Lahir</label>
                            <div class="input-group col-md-10">
                                <div class="input-group" style="padding-right: 6px;">
                                    <span class="input-group-text"><i class="fa fa-home fa-fw"></i></span>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
                                </div>
                                <div class="input-group date">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar fa-fw"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lahir" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="row">
                            <label class="col-md-2 control-label" for="alamat">Alamat</label>
                            <div class="input-group col-md-10">
                                <div class="input-group" style="padding-right: 6px;">
                                    <span class="input-group-text"><i class="fa fa-address-card fa-fw"></i></span>
                                    <input type="text" class="form-control" placeholder="Alamat" value="Sumberejo 1" name="alamat" required>
                                </div>
                                <div class="input-group col-xs-2" style="padding-right: 6px;">
                                    <span class="input-group-text"><i class="fa fa-circle-o-notch fa-fw"></i></span>
                                    <input type="number" class="form-control" placeholder="Rt" name="rt" required>
                                </div>
                                <div class="input-group col-xs-2">
                                    <span class="input-group-text"><i class="fa fa-circle-o-notch fa-fw"></i></span>
                                    <input type="number" class="form-control" placeholder="Rw" name="rw" value="1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="row">
                            <label class="col-md-2 control-label" for="alamat2"></label>
                            <div class="input-group col-md-10">
                                <div class="input-group" style="padding-right: 6px;">
                                    <span class="input-group-text"><i class="fa fa-circle-o-notch fa-fw"></i></span>
                                    <input type="text" class="form-control" placeholder="Kelurahan" value="Sumberejo" name="kelurahan" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-circle-o-notch fa-fw"></i></span>
                                    <input type="text" class="form-control" placeholder="Kecamatan" value="Pakal" name="kecamatan" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="notelp">Nomor Telpon</label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-phone-square fa-fw"></i></span>
                                    <input type="number" class="form-control" placeholder="Nomor Telpon" name="No_tlp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="agama">Agama</label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user-secret fa-fw"></i></span>
                                    <select class="form-control" name="agama" style="width: 100%;" required>
                                        <option selected="selected" value="">-- Agama --</option>
                                        <option value="0">Islam</option>
                                        <option value="1">Kristen</option>
                                        <option value="2">Katolik</option>
                                        <option value="3">Hindu</option>
                                        <option value="4">Buddha</option>
                                        <option value="5">Kong Hu Cu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="nik">NIK</label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-id-card fa-fw"></i></span>
                                    <input type="number" class="form-control" placeholder="NIK" name="NIK" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="no KK">Nomor KK</label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-id-card fa-fw"></i></span>
                                    <input type="number" class="form-control" placeholder="Nomor KK" name="No_KK" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="No_BPJS">Nomor BPJS <small>(bila ada)</small></label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-id-card fa-fw"></i></span>
                                    <input type="number" class="form-control" placeholder="Nomor BPJS (bila ada)" name="No_BPJS">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="gakin">Status Gakin</label>
                            <div class="input-group col-md-10">
                                <div class="form-check-inline">
                                    <label class="form-check-label" style="padding: 6px 10px 0px 0px;">
                                        <input type="radio" name="gakin" class="form-check-input minimal" value="0" required> Non Gakin
                                    </label>
                                    <label class="form-check-label">
                                        <input type="radio" name="gakin" class="form-check-input minimal" value="1" required> Gakin
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label" for="nama_anak">Jabatan Sebagai Kader</label>
                            <div class="input-group col-md-10">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user fa-fw"></i></span>
                                    <select class="form-control" name="jabatan" style="width: 100%;" required>
                                        <option selected="selected" value="0">-- Jabatan --</option>
                                        <option value="1">Ketua</option>
                                        <option value="2">Sekretaris</option>
                                        <option value="3">Bendahara</option>
                                        <option value="4">Anggota</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4 control-label" for="name"></label>
                            <div class="input-group col-md-10">
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