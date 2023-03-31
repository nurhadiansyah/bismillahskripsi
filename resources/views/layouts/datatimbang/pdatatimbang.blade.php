@extends('layouts/master')

@section('content')
{{-- <div class="panel panel-default">
	<div class="panel-heading">Edit Data Timbang</div>
	<div class="panel-body">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					@foreach($data as $datas)
					<form class="form-horizontal" method="post" action="{{ route('tanak.update', $datas->id_timbang) }}">
						@csrf
						<input name="_method" type="hidden" value="PATCH" />
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="id_anak">Nama Anak</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-child"></i></span>
										<select class="form-control select2" name="id_anak" style="width: 100%;" required>
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
								<label class="col-md-4 control-label" for="alamat2">Berat dan Tinggi Badan</label>
								<div class="input-group col-md-8">
									<div class="input-group" style="padding-right: 6px;">
										<span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
										<input type="text" class="form-control" placeholder="Berat Badan" name="berat_badan" value="{{ $datas->berat_badan }}" required>
										<span class="input-group-addon">Kg</span>
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-long-arrow-up"></i></span>
										<input type="text" class="form-control" placeholder="Tinggi Badan" name="tinggi_badan" value="{{ $datas->tinggi_badan }}" required>
										<span class="input-group-addon">cm</span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-inline">
							<div class="row">
								<label class="col-md-4 control-label" for="tgl_timbang">Tanggal Timbang</label>
								<div class="input-group col-md-8">
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Imunisasi" name="tgl_timbang" value="{{ $datas->tgl_timbang }}" required autocomplete="off">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="name"></label>
								<div class="input-group col-md-8">
									<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
									<a href="{{ route('timbang.index') }}" class="btn btn-danger">Batal</a>
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
</div> --}}
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Data Timbang</h6>
		<a href="tanak/show" target="_blank" class="btn btn-success btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-print"></i>
			</span>
			<span class="text">Cetak</span>
		</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<tr>
								<th>No</th>
								<th>Nama Anak</th>
								<th>Umur</th>
								<th>BB/TB</th>
								<th>Tanggal Timbang</th>
								<th>Status Gizi</th>
								<th>Keterangan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php $no = 1; @endphp
							@foreach($data2 as $datas2)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $datas2->nama_anak }}</td>
								<td>{{ $datas2->umur }} Bulan</td>
								<td>
									{{ $datas2->berat_badan }} Kg/{{ $datas2->tinggi_badan }} cm
								</td>
								<td>{{ $datas2->tgl_timbang }}</td>
								<td>{{ $datas2->status_gizi }}</td>
								<td>{{ $datas2->tindakan }}</td>
								<td>
									<form action="{{ route('tanak.destroy', $datas2->id_timbang) }}" method="post">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<div class="btn-group">
											<a href="{{ route('tanak.edit', $datas2->id_timbang) }}" class=" btn btn-sm btn-circle btn-warning" data-toggle="tooltip" title="Edit"><span class="fa-solid fa-pencil"></span></a>
											 <button class="btn btn-sm btn-circle btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="fa-solid fa-trash"></span></button>
										</div>
									 </form>
								</td>
							</tr>
							@endforeach
						</tbody>
						
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</div>
</div>
@endsection