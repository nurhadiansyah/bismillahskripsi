@extends('layouts/master')

@section('content')

<div class="card shadow mb-1">
    <div class="card-header py-2">
					@foreach($data as $datas)
					<form class="form-horizontal" method="post" action="{{ route('Imunisasis.update', $datas->id_imun) }}">
						@csrf
						<input name="_method" type="hidden" value="PATCH" />
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label" for="id_anak">Nama Anak</label>
								<div class="input-group col-md-8">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-child"></i></span>
										<select class="form-control select2" name="id_anak" style="width: 100%;" required>
											<option selected="selected" value="{{ $datas->id_anak }}">{{ $datas->nama_anak }}</option>
											<option value="">-- Nama Anak --</option>
											@foreach($data1 as $datas1)
												<option value="{{ $datas1->id_anak }}">{{ $datas1->nama_anak }} - {{ $datas1->nama_ibu }} & {{ $datas1->nama_suami }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label" for="id_j_imun">Nama Imunisasi</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-text"><i class="fa fa-child"></i></span>
										<select class="form-control select2" name="id_j_imun" style="width: 100%;" required>
											<option selected="selected" value="{{ $datas->id_j_imun }}">{{ $datas->nama_imun }}</option>
											<option value="">-- Nama Imunisasi --</option>
											@foreach($data2 as $datas2)
												<option value="{{ $datas2->id_j_imun }}">{{ $datas2->nama_imun }}</option>
											@endforeach
										</select>
									</div>
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
										<input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Imunisasi" name="tgl_imun" value="{{ $datas->tgl_imun }}" required autocomplete="off">
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
											<input type="radio" name="booster" class="form-check-input minimal" value="Ya" <?php echo ($datas->booster == 'Ya')?'checked':'' ?> required> Ya
										</label>
										<label class="form-check-label">
											<input type="radio" name="booster" class="form-check-input minimal" value="Tidak" <?php echo ($datas->booster == 'Tidak')?'checked':'' ?> required> Tidak
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label" for="ket_imun">Keterangan</label>
								<div class="input-group col-md-8">
									<textarea class="form-control" rows="4" id="keterangan" name="ket_imun">{{ $datas->ket_imun }}</textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label" for="name"></label>
								<div class="input-group col-md-8">
									<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
									<a href="{{ route('Imunisasis.index') }}" class="btn btn-danger">Batal</a>
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

@endsection