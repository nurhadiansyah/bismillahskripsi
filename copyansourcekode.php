<!-- // create data ibu -->
<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="nama_ibu">Nama Ibu</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-venus"></i></span>
										<input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="nama_suami">Nama Suami</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-mars"></i></span>
										<input type="text" class="form-control" placeholder="Nama Suami" name="nama_suami" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-inline">
							<div class="row">
								<label class="col-md-4 control-label" for="ttl">Tempat, Tanggal Lahir</label>
								<div class="input-group col-md-8">
									<div class="input-group" style="padding-right: 6px;">
										<span class="input-group-addon"><i class="fa fa-home"></i></span>
										<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
									</div>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lahir" required autocomplete="off">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-inline">
							<div class="row">
								<label class="col-md-4 control-label" for="alamat">Alamat</label>
								<div class="input-group col-md-8">
									<div class="input-group" style="padding-right: 6px;">
										<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
										<input type="text" class="form-control" placeholder="Alamat" value="Sumberejo 1" name="alamat" required>
									</div>
									<div class="input-group col-xs-2" style="padding-right: 6px;">
										<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
										<input type="number" class="form-control" placeholder="Rt" name="rt" required>
									</div>
									<div class="input-group col-xs-2">
										<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
										<input type="number" class="form-control" placeholder="Rw" name="rw" value="1" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-inline">
							<div class="row">
								<label class="col-md-4 control-label" for="alamat2"></label>
								<div class="input-group col-md-8">
									<div class="input-group" style="padding-right: 6px;">
										<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
										<input type="text" class="form-control" placeholder="Kelurahan" value="Sumberejo" name="kelurahan" required>
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
										<input type="text" class="form-control" placeholder="Kecamatan" value="Pakal" name="kecamatan" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="agama">Agama</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
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
								<label class="col-md-4 control-label" for="nik">NIK</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-id-card"></i></span>
										<input type="number" class="form-control" placeholder="NIK" name="NIK" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="no KK">Nomor KK</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-id-card"></i></span>
										<input type="number" class="form-control" placeholder="Nomor KK" name="No_KK" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="No_BPJS">Nomor BPJS <small>(bila ada)</small></label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-id-card"></i></span>
										<input type="number" class="form-control" placeholder="Nomor BPJS (bila ada)" name="No_BPJS">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="gakin">Status Gakin</label>
								<div class="input-group col-md-8">
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
								<label class="col-md-4 control-label" for="notelp">Nomor Telpon</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
										<input type="number" class="form-control" placeholder="Nomor Telpon" name="No_tlp">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="name"></label>
								<div class="input-group col-md-8">
									<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
									<a href="{{ route('ibu.index') }}" class="btn btn-danger">Batal</a>
								</div>
							</div>
						</div>




<!-- create data anak  -->
<form action="">
<div class="form-group">
	<div class="row">
			<label class="col-md-4 control-label" for="nama_anak">Nama Anak</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-child fa-fw" aria-hidden="true"></i></span>
					<input type="text" class="form-control" placeholder="Nama Anak" name="nama_anak" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="nama_anak">Nama Orang Tua</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-venus-mars fa-fw"></i></span>
					<select class="form-control select2" name="id_ibu" style="width: 100%;" required>
						<option selected="selected" value="">-- Orang Tua --</option>
						@foreach($data as $datas)
							<option value="{{ $datas->id }}">{{ $datas->nama_ibu }} - {{ $datas->nama_suami }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group form-inline">
		<div class="row">
			<label class="col-md-4 control-label" for="ttl">Tempat, Tanggal Lahir</label>
			<div class="input-group col-md-8">
				<div class="input-group" style="padding-right: 6px;">
					<span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lhr" required>
				</div>
				<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar fa-fw"></i>
					</div>
					<input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lhr" required autocomplete="off">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group form-inline">
		<div class="row">
			<label class="col-md-4 control-label" for="alamat2">Berat dan Tinggi Badan</label>
			<div class="input-group col-md-8">
				<div class="input-group" style="padding-right: 6px;">
					<span class="input-group-addon"><i class="fa fa-balance-scale fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Berat Badan Lahir" name="bb_lahir" required>
					<span class="input-group-addon">Kg</span>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-long-arrow-up fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Tinggi Badan Lahir" name="tb_lahir" required>
					<span class="input-group-addon">cm</span>
				</div>
				<br/>
				<p style="color: grey">Note : Gunakan (.) sebagai pengganti (,)</p>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="nama_anak">Jenis Kelamin</label>
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
			<label class="col-md-4 control-label" for="nama_anak">Anak Ke-</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-list-ol fa-fw"></i></span>
					<input type="number" class="form-control" placeholder="Anak Ke-" name="anak_ke" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group form-inline">
		<div class="row">
			<label class="col-md-4 control-label" for="alamat2">Bersalin</label>
			<div class="input-group col-md-8">
				<div class="input-group" style="padding-right: 6px;">
					<span class="input-group-addon"><i class="fa fa-hotel fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Jenis Persalinan" name="jenis_persalinan" required>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-hospital-o fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Tempat Bersalin" name="tempat_persalinan" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="nama_anak">Dokter/Bidan</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user-md fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Dokter/Bidan Pembantu" name="dokter" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="nik">NIK</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-id-card fa-fw"></i></span>
					<input type="number" class="form-control" placeholder="NIK" name="NIK_anak">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="BPJS_anak">Nomor BPJS <small>(bila ada)</small></label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-id-card fa-fw"></i></span>
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
				<a href="{{ route('anak.index') }}" class="btn btn-danger">Batal</a>
			</div>
		</div>
	</div>
</div>
</form>

<!-- //data kader -->
<form>
<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="nama_ibu">Nama Kader</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-venus fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="nama_suami">Nama Suami</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-mars fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Nama Suami" name="nama_suami" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group form-inline">
		<div class="row">
			<label class="col-md-4 control-label" for="ttl">Tempat, Tanggal Lahir</label>
			<div class="input-group col-md-8">
				<div class="input-group" style="padding-right: 6px;">
					<span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
				</div>
				<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar fa-fw"></i>
					</div>
					<input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lahir" required autocomplete="off">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group form-inline">
		<div class="row">
			<label class="col-md-4 control-label" for="alamat">Alamat</label>
			<div class="input-group col-md-8">
				<div class="input-group" style="padding-right: 6px;">
					<span class="input-group-addon"><i class="fa fa-address-card fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Alamat" value="Sumberejo 1" name="alamat" required>
				</div>
				<div class="input-group col-xs-2" style="padding-right: 6px;">
					<span class="input-group-addon"><i class="fa fa-circle-o-notch fa-fw"></i></span>
					<input type="number" class="form-control" placeholder="Rt" name="rt" required>
				</div>
				<div class="input-group col-xs-2">
					<span class="input-group-addon"><i class="fa fa-circle-o-notch fa-fw"></i></span>
					<input type="number" class="form-control" placeholder="Rw" name="rw" value="1" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group form-inline">
		<div class="row">
			<label class="col-md-4 control-label" for="alamat2"></label>
			<div class="input-group col-md-8">
				<div class="input-group" style="padding-right: 6px;">
					<span class="input-group-addon"><i class="fa fa-circle-o-notch fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Kelurahan" value="Sumberejo" name="kelurahan" required>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-circle-o-notch fa-fw"></i></span>
					<input type="text" class="form-control" placeholder="Kecamatan" value="Pakal" name="kecamatan" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="notelp">Nomor Telpon</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-phone-square fa-fw"></i></span>
					<input type="number" class="form-control" placeholder="Nomor Telpon" name="No_tlp">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="agama">Agama</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user-secret fa-fw"></i></span>
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
			<label class="col-md-4 control-label" for="nik">NIK</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-id-card fa-fw"></i></span>
					<input type="number" class="form-control" placeholder="NIK" name="NIK" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="no KK">Nomor KK</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-id-card fa-fw"></i></span>
					<input type="number" class="form-control" placeholder="Nomor KK" name="No_KK" required>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="No_BPJS">Nomor BPJS <small>(bila ada)</small></label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-id-card fa-fw"></i></span>
					<input type="number" class="form-control" placeholder="Nomor BPJS (bila ada)" name="No_BPJS">
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="gakin">Status Gakin</label>
			<div class="input-group col-md-8">
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
			<label class="col-md-4 control-label" for="nama_anak">Jabatan Sebagai Kader</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
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
			<div class="input-group col-md-8">
				<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
				<a href="{{ route('kader.index') }}" class="btn btn-danger">Batal</a>
			</div>
		</div>
	</div>
</form>

<!-- jenis imunisasi create -->

<form class="form-horizontal" method="post" action="//">
		<div class="form-group">
			<div class="row">
				<label class="col-md-4 control-label" for="nama_imun">Nama Imunisasi</label>
				<div class="input-group col-md-8">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-eyedropper" aria-hidden="true"></i></span>
						<input type="text" class="form-control" placeholder="Nama Imunisasi" name="nama_imun" required>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-4 control-label" for="umur">Umur</label>
				<div class="input-group col-md-8">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-list-ol" aria-hidden="true"></i></span>
						<input type="number" class="form-control" placeholder="Umur" name="umur" required>
						<span class="input-group-addon"> Bulan</span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<label class="col-md-4 control-label" for="name"></label>
				<div class="input-group col-md-8">
					<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
					<a href="{{ route('jenisimunisasi.index') }}" class="btn btn-danger">Batal</a>
				</div>
			</div>
		</div>
</form>

<!-- timbang anak create -->
<div class="panel-heading">Masukkan Data Timbang</div>
	<div class="panel-body">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<form class="form-horizontal" method="post" action="//">
						@csrf
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="id_anak">Nama Anak</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-child fa-fw"></i></span>
										<select class="form-control select2" name="id_anak" style="width: 100%;" required>
											<option selected="selected" value="">-- Nama Anak --</option>
											@foreach($dataCreate as $datas)
												<option value="{{ $datas->id_anak }}">{{ $datas->nama_anak }} - {{ $datas->nama_ibu }} & {{ $datas->nama_suami }}</option>
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
										<span class="input-group-addon"><i class="fa fa-balance-scale fa-fw"></i></span>
										<input type="text" class="form-control" placeholder="Berat Badan" name="berat_badan" required>
										<span class="input-group-addon">Kg</span>
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-long-arrow-up fa-fw"></i></span>
										<input type="text" class="form-control" placeholder="Tinggi Badan" name="tinggi_badan" required>
										<span class="input-group-addon">cm</span>
									</div>
									<br/>
									<p style="color: grey">Note : Gunakan (.) sebagai pengganti (,)</p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="name"></label>
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

    <!-- data timbang -->
    <div class="panel-heading">Masukkan Data Timbang</div>
	<div class="panel-body">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<form class="form-horizontal" method="post" action="//">
						@csrf
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="id_anak">Nama Anak</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-child fa-fw"></i></span>
										<select class="form-control select2" name="id_anak" style="width: 100%;" required>
											<option selected="selected" value="">-- Nama Anak --</option>
											<!-- @foreach($dataCreate as $datas)
												<option value="{{ $datas->id_anak }}">{{ $datas->nama_anak }} - {{ $datas->nama_ibu }} & {{ $datas->nama_suami }}</option>
											@endforeach -->
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
										<span class="input-group-addon"><i class="fa fa-balance-scale fa-fw"></i></span>
										<input type="text" class="form-control" placeholder="Berat Badan" name="berat_badan" required>
										<span class="input-group-addon">Kg</span>
									</div>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-long-arrow-up fa-fw"></i></span>
										<input type="text" class="form-control" placeholder="Tinggi Badan" name="tinggi_badan" required>
										<span class="input-group-addon">cm</span>
									</div>
									<br/>
									<p style="color: grey">Note : Gunakan (.) sebagai pengganti (,)</p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="name"></label>
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
<!-- grafik KMS -->
<div class="box box-solid">
    <!-- /.box-header -->
    <div class="box-body">
        <div class="box-group" id="accordion">
            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
            <div class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Grafik KMS
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                        <!-- @if (Session::has('dataKelamin'))
                            @if(Session::get('dataKelamin') == 1)
                                <div id="grafik_female" style="height: 700px">
                                    view grafik 
                                </div> -->
                            <!-- @else
                                <div id="grafik_male" style="height: 700px">
                                    view grafik 
                                </div>
                            @endif -->
                        <!-- @else
                            <div style="text-align: center;">
                                <p>Grafik Tumbuh Kembang Anak</p>
                            </div>
                        @endif -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>

<!-- view timbang -->
<table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
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
                                    @foreach($data as $datas)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $datas->nama_anak }}</td>
                                        <td>{{ $datas->umur }} Bulan</td>
                                        <td>
                                            {{ $datas->berat_badan }} Kg/{{ $datas->tinggi_badan }} cm
                                        </td>
                                        <td>{{ $datas->tgl_timbang }}</td>
                                        <td>{{ $datas->status_gizi }}</td>
                                        <td>{{ $datas->ket_timbang }}</td>
                                        <td>
                                            <!-- <form action="{{ route('timbang.destroy', $datas->id_timbang) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }} -->
                                                <div class="btn-group">
                                                    <a href="{{ route('timbang.edit', $datas->id_timbang) }}" class=" btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                                    <!-- <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></button> -->
                                                </div>
                                            <!-- </form> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Anak</th>
                                        <th>Umur</th>
                                        <th>BB/TB</th>
                                        <th>Tanggal Timbang</th>
                                        <th>Status Gizi</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>

<!-- data status gizi create -->
<div class="form-group">
							<div class="row">
								<label class="col-md-4 control-label" for="id_anak">Nama Anak</label>
								<div class="input-group col-md-8">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-child"></i></span>
										<select class="form-control select2" name="id_anak" style="width: 100%;" required>
											<option selected="selected" value="">-- Nama Anak --</option>
											@foreach($data as $datas)
												<option value="{{ $datas->id_anak }}">{{ $datas->nama_anak }} - {{ $datas->nama_ibu }} & {{ $datas->nama_suami }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
						</div>

<!-- laporan view -->
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="form">Cetak File</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-child"></i></span>
					<select class="form-control select2" name="form" style="width: 100%;" required>
						<option selected="selected" value="">-- Pilihan Cetak --</option>
						<option value="form1">Form 1 - Laporan Bulanan Pelayanan Gizi</option>
						<option value="form2">Form 2 - Data Balita Tidak Hadir</option>
						<option value="form3">Form 3 - Balita Gizi Buruk</option>
						<option value="form4">Form 4 - Balita 2T dan BGM</option>
						<option value="form5">Form 5 - Balita Gizi Lebih</option>
						<option value="form6">Form 6 - Pemberian Vitamin A</option>
						<option value="form7">Form 7 - Dokumentasi Kegiatan</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="tahun">Tahun</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
					<select class="form-control select2" name="tahun" style="width: 100%;" required>
						<option selected="selected" value="">-- Pilih Tahun --</option>
						@foreach($get_bln as $datas)
							<option value="{{ $datas->year }}">{{ $datas->year }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="bulan">Bulan</label>
			<div class="input-group col-md-8">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-home"></i></span>
					<select class="form-control select2" name="bulan" style="width: 100%;" required>
						<option selected="selected" value="">-- Pilih Bulan --</option>
						@foreach($data as $datas)
							@php
							$F = date("F", strtotime($datas->start))
							@endphp
							<option value="{{ $F }}">{{ $F }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-4 control-label" for="name"></label>
			<div class="input-group col-md-8">
				<button type="submit" class="btn btn-primary" style="margin-right: 6px;">Submit</button>
				<!-- <a href="{{ route('form1') }}" target="_blank" class="btn btn-danger">Form 1</a>
				<a href="{{ route('form2') }}" target="_blank" class="btn btn-danger">Form 2</a>
				<a href="{{ route('form3') }}" target="_blank" class="btn btn-danger">Form 3</a>
				<a href="{{ route('form4') }}" target="_blank" class="btn btn-danger">Form 4</a>
				<a href="{{ route('form5') }}" target="_blank" class="btn btn-danger">Form 5</a>
				<a href="{{ route('form6') }}" target="_blank" class="btn btn-danger">Form 6</a>
				<a href="{{ route('form7') }}" target="_blank" class="btn btn-danger">Form 7</a> -->
			</div>
		</div>
	</div>

<!-- data user view -->
<table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <!-- <th style="width: 5%;text-align: center;">#</th>
                            <th style="width: 27%;text-align: center;">Nama</th>
                            <th style="width: 27%;text-align: center;">Email</th>
                            <th style="width: 26%;text-align: center;">Level</th>
                            <th style="width: 15%;text-align: center;">Aksi</th> -->
                            <th style="text-align: center;">#</th>
                            <th style="text-align: center;">Nama</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Level</th>
                            <th style="text-align: center;">PWD</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <!-- <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $datas)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $datas->nama_ibu }}</td>
                            <td>{{ $datas->email }}</td>
                            <td>
                                @if ($datas->level == 1)
                                    <span class="label label-primary">
                                        {{ 'Admin' }}
                                    </span>
                                @else
                                    <span class="label label-success">
                                        {{ 'User Ibu' }}
                                    </span>
                                @endif
                                </span>
                            </td>
                            <td>{{ ($datas->password) }}</td>
                            <td>
                                <form action="{{ route('pengguna.destroy', $datas->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group">
                                        <a href="{{ route('pengguna.edit', $datas->id) }}" class=" btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="{{ route('generatePwd', $datas->id) }}" class=" btn btn-sm btn-info" data-toggle="tooltip" title="Paswword Baru"><span class="glyphicon glyphicon-wrench"></span></a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> -->
                    <tfoot>
                        <tr>
                            <th style="text-align: center;">#</th>
                            <th style="text-align: center;">Nama</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Level</th>
                            <th style="text-align: center;">PWD</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </tfoot>
                </table>