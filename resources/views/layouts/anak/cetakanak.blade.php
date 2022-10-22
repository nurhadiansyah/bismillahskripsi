<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div style="text-align: center;">
        <h3 style="text-align: center;">DATA ANAK</h3>
        <h1 style="text-align: center;">POSYANDU KABUPUTAEN DUA PITUE</h1>
        <p style="text-align: center;">Semua Data</p>
        <hr>
       
    </div>
    <div class="table-responsive">
		<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 5%; text-align: center;">No</th>
                    <th style="width: 25%; text-align: center;">Nama Anak</th>
                    <th style="width: 20%; text-align: center;">Orang Tua</th>
                    <th style="width: 15%; text-align: center;">Jenis Kelamin</th>
                    <th style="width: 10%; text-align: center;">Tgl Lahir</th>
                    <th style="width: 25%; text-align: center;">KMS</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                <tr>
                    <td style="width: 5%; text-align: center;">{{ $no++ }}</td>
                    <td style="width: 25%; text-align: center;">{{ $datas->nama_anak }}</td>
                    <td style="width: 20%; text-align: center;">{{ $datas->nama_ibu }} & {{ $datas->nama_suami }}</td>
                    <td style="width: 15%; text-align: center;">
                        @if ($datas->jenis_kelamin == 0)
                            Laki-Laki
                        @else
                            Perempuan
                        @endif
                    </td>
                    <td style="width: 10%; text-align: center;">{{ $datas->tgl_lhr }}</td>
                    <td style="width: 25%; text-align: center;">
                        @if ($datas->KMS == 0)
                            <i class="fa fa-check-circle-o fa-lg" aria-hidden="true" style="color: green"></i>
                        @else
                            <i class="fa fa-times-circle-o fa-lg" aria-hidden="true" style="color: red"></i>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <br>
    <br>
    <br>
    <div style="float: right;padding: 10px;">
    <p>Sidrap, </p>
    <p>Ketua Kader Posyandu</p>
        <br>
        <br>
        <br>
    <p>yuni hartika</p>
    </div>
    </div>
</body>
</html>