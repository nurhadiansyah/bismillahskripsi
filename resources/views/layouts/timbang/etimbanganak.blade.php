@extends('layouts/master')

@section('content')
<div class="card shadow mb-1">
<div class="card-header py-2">
<div class="panel panel-default">
	<div class="panel-heading" ><b >Edit Data Timbang</b></div>
	<div class="panel-body">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					@foreach($data as $datas)
					<form class="form-horizontal" class="form-group" method="post" action="{{ route('tanak.update', $datas->id_timbang) }}">
						@csrf
						<input name="_method" type="hidden" value="PATCH" />
						<div class="form-group ">
							<div class="row">
								<label class="col-md-2 " for="id_anak">Nama Anak</label>
								<div class="input-group col-md" >
									<div class="input-group ">
										<span class="input-group-text"><i class="fa fa-child fa-fw"></i></span>
										<select class="form-control select2" name="id_anak"  required>
											<option selected="selected" value="{{ $datas->id_anak }}">{{ $datas->nama_anak }}</option>
											<option value="">-- Nama Anak --</option>
											@foreach($data2 as $datas2)
												<option value="{{ $datas2->id_anak }}">{{ $datas2->nama_anak }} - {{ $datas2->nama_ibu }} & {{ $datas2->nama_suami }}</option>
											@endforeach
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
										<input type="text" class="form-control" placeholder="Berat Badan" name="berat_badan" value="{{ $datas->berat_badan }}" required>
										<span class="input-group-addon">Kg</span>
									</div>
									<div class="input-group">
										<span class="input-group-text"><i class="fa fa-long-arrow-up fa-fw"></i></span>
										<input type="text" class="form-control" placeholder="Tinggi Badan" name="tinggi_badan" value="{{ $datas->tinggi_badan }}" required>
										<span class="input-group-text">cm</span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-inline">
							<div class="row">
								<label class="col-md-4 control-label" for="tgl_timbang">Tanggal Timbang</label>
								<div class="input-group col-md-8">
									<div class="input-group date">
										<div class="input-group-text">
											<i class="fa fa-calendar fa-fw"></i>
										</div>
										<input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Imunisasi" name="tgl_timbang" value="{{ $datas->tgl_timbang }}" required autocomplete="off">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label" for="tindakan">Tindakan</label>
								<div class="input-group col-md-8">
									{{-- <textarea class="form-control" rows="4" id="tindakan" name="tindakan" ></textarea> --}}
									<input type="text" class="form-control" row="4" placeholder="Tindakan" name="tindakan" value="{{ $datas->tindakan }}" required>
								</div>
							</div>
					</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="name"></label>
								<div class="input-group col-md-8">
									<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
									<a href="{{ route('tanak.index') }}" class="btn btn-danger">Batal</a>
								</div>
							</div>
						</div>
					</form>
					@endforeach
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection