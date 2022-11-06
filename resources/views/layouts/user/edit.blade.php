@extends('layouts/master')

@section('content')        

    <div class="card shadow mb-1">
        <div class="card-header py-2">
					@foreach($data as $datas)
					<form class="form-horizontal" method="post" action="{{ route('pengguna.update', $datas->id) }}">
						@csrf
						<input name="_method" type="hidden" value="PATCH" />
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="nama_anak">Nama Ibu</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
										<select class="form-control" name="id_ibu" style="width: 100%;">
											<option selected="selected" value="{{ $datas->id_ibu }}">{{ $datas->nama_ibu }} - {{ $datas->nama_suami }}</option>
											<option value="">-- Nama Ibu --</option>
											@foreach($data2 as $data2s)
												<option value="{{ $data2s->id_ibu }}">{{ $data2s->nama_ibu }} - {{ $data2s->nama_suami }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="alamat">Email</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-home"></i></span>
										<input type="text" class="form-control" placeholder="Email" name="email" value="{{ $datas->email }}" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="nama_anak">Level</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
										<select class="form-control" name="level" style="width: 100%;">
											<option selected="selected" value="{{ $datas->level }}">
												@if ($datas->level == 1)
				                                    {{ 'Admin' }}
				                                @else
				                                    {{ 'User' }}
				                                @endif
											</option>
											<option disabled="disabled">-- Level --</option>
											@if ($datas->level == 1)
												<option value="0">User</option>
											@else
												<option value="1">Admin</option>
											@endif
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="name"></label>
								<div class="input-group col-md-8">
									<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Update</button>
									<a href="{{ route('pengguna.index') }}" class="btn btn-danger">Batal</a>
								</div>
							</div>
						</div>
					</form>
					@endforeach
				</div>

			</div>

@endsection