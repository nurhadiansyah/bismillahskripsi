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
            @foreach($data as $datas)
            <form  method="post" action="{{ route('ibus.update', $datas->id) }}">
                @csrf
                <input name="_method" type="hidden" value="PATCH" />
                <div class="form-horizontal" class="form-group">
                    <div class="row">
                        <label class="col-md-2 control-label text-right align-bottom"for="nama_ibu">Nama Ibu</label>
                        <div class="input-group col-md-7">
                            <div class="input-group-prepend input-group">
                                <span class="input-group-text" ><i class="fa fa-venus"></i></span>
                                <input type="text" class="form-control " placeholder="Nama Ibu" name="nama_ibu" value="{{ $datas->nama_ibu }}" required>
                            </div>
                        </div>
                    </div> 
                </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label text-right align-bottom" for="nama_suami">Nama Suami</label>
                            <div class="input-group col-md-7">
                                <div class="input-group-prepend input-group">
                                    <span class="input-group-text"><i class="fa fa-mars"></i></span>
                                    <input type="text" class="form-control" placeholder="Nama Suami" name="nama_suami" value="{{ $datas->nama_suami }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="row form-inline">
                            <label class="col-md-2 control-label text-right align-bottom" for="ttl">Tempat, Tanggal Lahir</label>
                            <div class="input-group col-md-8">
                                <div class="input-group-prepend input-group" style="padding-right: 6px;">
                                    <span class="input-group-text"><i class="fa fa-home"></i></span>
                                    <input type="text" class="form-control date form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ $datas->tempat_lahir }}" required>
                                </div>
                                <div class="input-group-prepend input-group">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right"  placeholder="yyyy/mm/dd" name="tgl_lahir" value="{{ $datas->tgl_lahir }}" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="row form-inline">
                            <label class="col-md-2 control-label text-right align-bottom" for="alamat">Alamat</label>
                            <div class="input-group col-md-9">
                                <div class="input-group" style="padding-right: 6px;">
                                    <span class="input-group-text col-md-2"><i class="fa fa-address-card"></i></span>
                                    <input type="text" class="form-control" placeholder="Alamat"  name="alamat" value="{{ $datas->alamat }}" required>
                                </div>
                                <div class="input-group col-md-2 " style="padding-right: 6px;">
                                    <span class="input-group-text"><i class="fa fa-circle-o-notch">RT</i></span>
                                    <input type="number" class="form-control" placeholder="Rt" name="rt" value="{{ $datas->rt }}" required>
                                </div>
                                <br>
                                <div class="input-group col-md-2">
                                    <span class="input-group-text"><i class="fa fa-circle-o-notch">RW</i></span>
                                    <input type="number" class="form-control" placeholder="Rw" name="rw" value="{{ $datas->rw }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="row">
                            <label class="col-md-2 control-label text-right align-bottom" for="alamat2">.</label>
                            <div class="input-group col-md-10">
                                <div class="input-group col-md-6" style="padding-right: 6px;">
                                    <span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span>
                                    <input type="text" class="form-control" placeholder="Kelurahan" value="" name="kelurahan" value="{{ $datas->kelurahan }}" required>
                                </div>
                                <div class="input-group col-md-6">
                                    <span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span>
                                    <input type="text" class="form-control" placeholder="Kecamatan" value="" name="kecamatan" value="{{ $datas->kecamatan }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label text-right align-bottom" for="agama">Agama</label>
                            <div class="input-group col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user-secret"></i></span>
                                    <select class="form-control" name="agama" style="width: 80%;" required>
                                        <option selected="selected" value="{{ $datas->agama }}">
                                            @if ($datas->agama == 0)
                                                Islam
                                            @elseif ($datas->agama == 1)
                                                Kristen
                                            @elseif ($datas->agama == 2)
                                                Katolik
                                            @elseif ($datas->agama == 3)
                                                Hindu
                                            @elseif ($datas->agama == 4)
                                                Buddha
                                            @elseif ($datas->agama == 5)
                                                Kong Hu Cu
                                            @else
                                                Null
                                            @endif
                                        </option>
                                        <option value="">-- Agama --</option>
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
                            <label class="col-md-2 control-label text-right align-bottom" for="nik">NIK</label>
                            <div class="input-group col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                    <input type="number" class="form-control" placeholder="NIK" name="NIK" value="{{ $datas->NIK }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label text-right align-bottom" for="no KK">Nomor KK</label>
                            <div class="input-group col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                    <input type="number" class="form-control" placeholder="Nomor KK" name="No_KK" value="{{ $datas->No_KK }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label text-right align-bottom" for="No_BPJS">Nomor BPJS <small>(bila ada)</small></label>
                            <div class="input-group col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                    <input type="number" class="form-control" placeholder="Nomor BPJS (bila ada)" name="No_BPJS" value="{{ $datas->No_BPJS }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label text-right align-bottom" for="gakin">Status Gakin</label>
                            <div class="input-group col-md-8">
                                <div class="form-check-inline">
                                    <label class="form-check-label" style="padding: 6px 10px 0px 0px;">
                                        <input type="radio" name="gakin" class="form-check-input minimal" value="0" <?php echo ($datas->gakin == '0')?'checked':'' ?> > Non Gakin
                                    </label>
                                    <label class="form-check-label">
                                        <input type="radio" name="gakin" class="form-check-input minimal" value="1" <?php echo ($datas->gakin == '1')?'checked':'' ?> > Gakin
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2 control-label text-right align-bottom" for="notelp">Nomor Telpon</label>
                            <div class="input-group col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
                                    <input type="number" class="form-control" placeholder="Nomor Telpon" name="No_tlp" value="{{ $datas->No_tlp }}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4 control-label" for="name"></label>
                            <div class="input-group col-md-8">
                                <button type="submit" class="btn btn-primary" style="margin-right: 6px;">update</button>
                                <a href="/ibus" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </div>
            </form>
            @endforeach
    </div>

</div>
</div>
@endsection

