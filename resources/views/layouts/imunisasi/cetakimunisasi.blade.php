<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div style="text-align: center;">
        <h3 style="text-align: center;">DATA imunisasi</h3>
        <h1 style="text-align: center;">POSYANDU KABUPUTAEN DUA PITUE</h1>
        <p style="text-align: center;">Semua Data</p>
        <hr>
       
    </div>
    <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <tr>
                        <th>#</th>
                        <th>Nama Anak</th>
                        <th>Nama Imunisasi</th>
                        <th>Tanggal Imunisasi</th>
                        <th>Booster</th>
                        <th>Keterangan</th>
                    </tr>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                @csrf
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $datas->nama_anak }}</td>
                    <td>{{ $datas->nama_imun }}</td>
                    <td>{{ $datas->tgl_imun }}</td>
                    <td>{{ $datas->booster }}</td>
                    <td>{{ $datas->ket_imun }}</td>
                    
                </tr>
                @endforeach
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot> --}}
            
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