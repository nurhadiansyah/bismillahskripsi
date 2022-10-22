<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div style="text-align: center;">
        <h3 style="text-align: center;">DATA TIMBANG</h3>
        <h1 style="text-align: center;">POSYANDU KABUPUTAEN DUA PITUE</h1>
        <p style="text-align: center;">Semua Data</p>
        <hr>
       
    </div>
    <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Nama Anak</th>
                <th>Umur</th>
                <th>BB/TB</th>
                <th>Tanggal Timbang</th>
                <th>Status Gizi</th>
                <th>Keterangan</th>
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
                <td>{{ $datas2->ket_timbang }}</td> 
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
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>