<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div style="text-align: center;">
        <h3 style="text-align: center;">DATA IBU</h3>
        <h1 style="text-align: center;">POSYANDU KABUPATEN SIDRAP</h1>
        <p style="text-align: center;">Semua Data</p>
        <hr>
       
    </div>
    <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama ibu</th>
                    <th>nama ayah</th>
                    <th>alamat</th>
                    <th>No Bpjs</th>
                    <th>status gakin</th> 
                </tr>
            </thead>
            <tbody>
                @php $no = 1; 
                @endphp
                @foreach($data as $datas)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $datas->nama_ibu }}</td>
                    <td>{{ $datas->nama_suami }}</td>
                    <td>{{ $datas->alamat }} Rt {{ $datas->rt }}/Rw {{ $datas->rw }}</td>
                    <td>
                        @if ($datas->No_BPJS == null)
                            <p style="text-align: center; color: #9ca4af;">Tidak Ada</p>
                        @else
                            {{ $datas->No_BPJS }}
                        @endif
                    </td>
                    <td style="text-align: center;">
                        @if ($datas->gakin == 0)
                            Non Gakin
                        @else
                            Gakin
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>No</th>
                    <th>nama ibu</th>
                    <th>nama ayah</th>
                    <th>alamat</th>
                    <th>No Bpjs</th>
                    <th>Status gakin</th>
                    <th>Aksi</th>
                </tr>
            </tfoot> --}}
            
        </table>
    <br>
    <br>
    <br>
    <br>
    <div style="float: right;padding: 10px;">
    <p>Sidrap, </p>
    <p>Ketua Kader Posyandu</p>
        <br>
        <br>
        <br>
    <p>Suriana</p>
    </div>
    </div>
    <script type="text/javascript">
        window.print();s
    </script>
</body>
</html>