@extends('layouts/masteruser')

@section('contentuser') 

<div class="row">

    <div class="col-xl-8 col-lg-7">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="box box-primary">    
                    <table>
                        <tr>
                          <td>Nama Ibu</td>
                          <td>:</td>
                          <td>{{ $data ->nama_ibu }}</td>
                        </tr>
                        <tr>
                          <td>Nama Ayah</td>
                          <td>:</td>
                          <td>{{ $data->nama_suami }}</td>
                          
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td>:</td>
                          <td>{{ $data->alamat }} Rt {{ $data->rt }}/Rw {{ $data->rw }} {{ $data->kecamatan }}</td>
                        </tr>
                        <tr>
                          <td>Berat Badan</td>
                          <td>:</td>
                          <td>{{ $data->bb_lahir }} Kg</td>
                        </tr>
                        <tr>
                          <td>Tinggi Badan</td>
                          <td>:</td>
                          <td>{{ $data->tb_lahir }} cm</td>
                          
                        </tr>
                        <tr>
                          <td>Tinggi Badan</td>
                          <td>:</td>
                          <td>{{ $data->tb_lahir }} cm</td>
                        </tr>
                        <tr>
                          <td>Anak ke</td>
                          <td>:</td>
                          <td>{{ $data->anak_ke }}</td>
                        </tr>
                        <tr>
                          <td>Jenis Persalinan</td>
                          <td>:</td>
                          <td>{{ $data->jenis_persalinan }}</td>
                        </tr>
                        <tr>
                          <td>Tempat Persalinan</td>
                          <td>:</td>
                          <td>{{ $data->tempat_persalinan }}</td>
                        </tr>
                        <tr>
                            <td>Dokter</td>
                            <td>:</td>
                            <td>{{ $data->dokter }}</td>
                         </tr>
                         <tr>
                          <td>NIK</td>
                          <td>:</td>
                          <td>@if ($data->NIK_anak == null)
                            Tidak Ada
                            @else
                            {{ $data->NIK_anak }}
                            @endif</td>
                        </tr>
                        <tr>
                          <td>No. BPJS</td>
                          <td>:</td>
                          <td>@if ($data->BPJS_anak == null)
                            Tidak Ada
                            @else
                            {{ $data->BPJS_anak }}
                            @endif</td>
                        </tr>
                      </table>
                
                </div>
           
            </div>
        </div>

        <!-- Bar Chart -->
     <div class="card shadow mb-4">
</div>

</div>

    <!-- Donut Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data anak</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle mx-auto d-block" width="100px" src="{!! asset('dist/img/avatar2.png') !!}" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ $data->nama_anak }}</h3>
                        <p class="text-muted text-center">{{ $data->nama_ibu }}</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Tempat Lahir</b> <a class="pull-right">{{ $data->tempat_lhr }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Tanggal Lahir</b> <a class="pull-right">
                                    @php
                                        $date = date("d-m-Y", strtotime($data->tgl_lhr))
                                    @endphp
                                    {{ $date }}
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Jenis Kelamin</b> <a class="pull-right">
                                    @if ($data->jenis_kelamin == 0)
                                        Laki-Laki
                                    @else
                                        Perempuan
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>

</div>

{{-- data imunisasi --}}
<div class="card shadow mb-1">
    <div class="card-header py-2">
        <h6 class="m-0 font-weight-bold text-primary">Data Imunisasi</h6>
    </div>
        <div class="box box-primary">  
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Imunisasi</th>
                            <th>Umur</th>
                            <th>Tanggal Imunisasi</th>
                            <th>Booster</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($data3 as $datas3)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $datas3->nama_imun }}</td>
                            <td>
                                @php
                                    $birthDt = new DateTime($data->tgl_lhr);
                                    $today = new DateTime($datas3->tgl_imun);
                                    $y = $today->diff($birthDt)->y;
                                    $m = $today->diff($birthDt)->m;
                                    $d = $today->diff($birthDt)->d;
                                @endphp
                                @if ($datas3->tgl_imun != null)
                                    @if ($y == 0)
                                        @if ($m < 1)
                                            {{ $m }} Bulan ({{ $d }} Hari)
                                        @else
                                            {{ $m }} Bulan
                                        @endif
                                    @elseif ($y == 1)
                                        {{ $m+12 }} Bulan
                                    @elseif ($y == 2)
                                        {{ $m+24 }} Bulan
                                    @elseif ($y == 3)
                                        {{ $m+36 }} Bulan
                                    @elseif ($y == 4)
                                        {{ $m+48 }} Bulan
                                    @elseif ($y == 5)
                                        {{ $m+60 }} Bulan
                                    @else
                                        Bayi Lulus
                                    @endif
                                @endif
                            </td>
                            <td>{{ $datas3->tgl_imun }}</td>
                            <td>{{ $datas3->booster }}</td>
                            <td>{{ $datas3->ket_imun }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>

{{-- data timbang anak --}}
<div class="card shadow mb-1">
    <div class="card-header py-2">
        <h6 class="m-0 font-weight-bold text-primary">Data timbang</h6>
    </div>
        <div class="box box-primary">  
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
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
<div class="box-header with-border">
    <div class="card shadow mb-1">
        <div class="card-header py-2">
                        <h6 class="box-title">
                            <center>
                            <a class="m-0 font-weight-bold text-primary">
                                Grafik Perkembangan Anak
                            </a>
                            </center>
                        </h6>
                    </div>
                    <div >
                        <div class="box-body">
                            @if($data->jenis_kelamin == 1)
                                <div id="grafik_female" style="height: 700px">
                                    <!-- view grafik -->
                                    {!! $chart1 !!}
                                </div>
                            @else
                                <div id="grafik_male" style="height: 700px">
                                    <!-- view grafik -->
                                    {!! $chart1 !!}
                                </div>
                            @endif
                            
        <!-- /.box-body -->
                        </div>
                    </div>
    </div>
    <!-- /.box-body -->
</div>
    </div>
                    
            </div>
    </div>
</div>
@endsection
    
@section('javauser')

<!-- DataTables -->
<script src="{!! asset('bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
    $(function () {
        $('#example1').DataTable();
        $('#example2').DataTable();
    })
</script>
<script type="text/javascript">
    // GRAFIK MALE
    $(function() {
        var data_viewer = <?php echo $grafik; ?>;

        Highcharts.chart('grafik_male', {
            colors: ['#7cb5ec', '#f7a35c', '#90ee7e', '#7798BF', '#aaeeee', '#ff0066', '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
            chart: {
                backgroundColor: null,
            },
            title: {
                text: 'Kartu Menuju Sehat (Laki-Laki)',
                style: {
                    fontSize: '16px',
                    fontWeight: 'bold',
                    textTransform: 'uppercase'
                },
            },
            
            xAxis: {
                title: {
                    text: 'Umur/Bulan',
                    style: {
                        textTransform: 'uppercase'
                    },
                },
                gridLineWidth: 1,
                labels: {
                    style: {
                        fontSize: '12px'
                    }
                },
                tickInterval: 1
            },
            yAxis: {
                title: {
                    text: 'Berat Badan/ Kg',
                    style: {
                        textTransform: 'uppercase'
                    },
                },
                labels: {
                    style: {
                        fontSize: '12px'
                    }
                },
                tickInterval: 1
            },
            tooltip: {
                borderWidth: 0,
                backgroundColor: 'rgba(219,219,216,0.8)',
                shadow: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 0,
                    marker: {
                        enabled: false,
                    },
                    enableMouseTracking: false
                },
                candlestick: {
                    lineColor: '#404048'
                },
                scatter: {
                    dataLabels: {
                        enabled: true
                    },
                }
            },
            background2: '#F0F0EA',

            series: [{
                name: 'BB Lebih',
                data: [
                    5.0,6.5,7.9,8.9,9.6,10.3,
                    10.9,11.3,11.8,12.2,12.5,
                    12.9,13.2,13.5,13.8,14.2,
                    14.5,14.8,15.1,15.4,15.7,
                    16.0,16.3,16.6,16.9,
                    17.2,17.5,17.9,18.2,18.4,18.8,
                    19.0,19.3,19.6,19.9,20.2,
                    20.4,20.7,21.0,21.2,21.5,
                    21.8,22.1,22.4,22.6,22.9,
                    23.2,23.5,23.8,24.1,24.3,
                    24.6,24.9,25.2,25.5,25.8,
                    26.1,26.4,26.7,27.0,27.3,
                ],
                color: '#f2f200',
            },{
                name: 'BB Normal',
                data: [
                    4.4,5.8,7.1,8.0,8.7,9.3,
                    9.8,10.3,10.7,11.0,11.4,
                    11.7,12.0,12.3,12.6,12.8,
                    13.1,13.4,13.6,13.9,14.2,
                    14.4,14.7,15.0,15.2,
                    15.6,15.8,16.1,16.3,16.6,16.9,
                    17.1,17.3,17.6,17.8,18.1,
                    18.3,18.5,18.8,19.0,19.2,
                    19.5,19.7,20.0,20.2,20.4,
                    20.7,21.0,21.2,21.4,21.7,
                    21.9,22.2,22.4,22.7,22.9,
                    23.2,23.4,23.7,23.9,24.1
                ],
                color: '#39b500',
            },{
                name: 'BB Kurang',
                data: [
                    2.5,3.4,4.3,5.0,5.5,6.0,
                    6.3,6.7,6.9,7.1,7.3,
                    7.6,7.7,7.9,8.1,8.3,
                    8.4,8.6,8.8,8.9,9.1,
                    9.2,9.4,9.5,9.7,
                    9.8,10.0,10.1,10.2,10.4,10.5,
                    10.6,10.8,10.9,11.0,11.2,
                    11.3,11.4,11.5,11.7,11.8,
                    11.9,12.0,12.1,12.2,12.4,
                    12.5,12.6,12.7,12.8,12.9,
                    13.0,13.2,13.3,13.4,13.5,
                    13.6,13.7,13.9,14.0,14.1
                ],
                color: '#39b500',
            },{
                name: 'BB Sangat Kurang',
                data: [
                    2.1,2.9,3.8,4.4,4.9,5.3,
                    5.7,5.9,6.2,6.4,6.6,
                    6.8,6.9,7.1,7.3,7.4,
                    7.6,7.7,7.8,8.0,8.1,
                    8.2,8.4,8.5,8.6,
                    8.8,8.9,9.0,9.1,9.2,9.4,
                    9.5,9.6,9.7,9.8,9.9,
                    10.0,10.1,10.2,10.3,10.4,
                    10.5,10.6,10.7,10.8,10.9,
                    11.0,11.1,11.2,11.3,11.4,
                    11.5,11.6,11.7,11.8,11.9,
                    12.0,12.1,12.2,12.3,12.4,
                ],
                color: '#ff0000',
            },{
                type: 'scatter',
                marker: {
                    enabled: true,
                    symbol: 'cross',
                    fillColor: '#000',
                    lineColor: '#FFF'
                },
                name: 'BB',
                data: data_viewer
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    })

    // GRAFIK FEMALE
    $(function() {
        var data_viewer = <?php echo $grafik; ?>;

        Highcharts.chart('grafik_female', {
            colors: ['#7cb5ec', '#f7a35c', '#90ee7e', '#7798BF', '#aaeeee', '#ff0066', '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
            chart: {
                backgroundColor: null,
            },
            title: {
                text: 'Kartu Menuju Sehat (Perempuan)',
                style: {
                    fontSize: '16px',
                    fontWeight: 'bold',
                    textTransform: 'uppercase'
                },
            },
            
            xAxis: {
                title: {
                    text: 'Umur',
                    style: {
                        textTransform: 'uppercase'
                    },
                },
                gridLineWidth: 1,
                labels: {
                    style: {
                        fontSize: '12px'
                    }
                },
                tickInterval: 1
            },
            yAxis: {
                title: {
                    text: 'Berat Badan',
                    style: {
                        textTransform: 'uppercase'
                    },
                },
                labels: {
                    style: {
                        fontSize: '12px'
                    }
                },
                tickInterval: 1
            },
            tooltip: {
                borderWidth: 0,
                backgroundColor: 'rgba(219,219,216,0.8)',
                shadow: false
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 0,
                    marker: {
                        enabled: false,
                    },
                    enableMouseTracking: false
                },
                candlestick: {
                    lineColor: '#404048'
                },
                scatter: {
                    dataLabels: {
                        enabled: true
                    },
                }
            },
            background2: '#F0F0EA',

            series: [{
                name: 'BB Lebih',
                data: [
                    4.8,6.2,7.4,8.4,9.2,9.8,
                    10.4,10.9,11.4,11.8,12.2,
                    12.5,12.9,13.2,13.6,13.9,
                    14.2,14.5,14.8,15.1,15.4,
                    15.7,16.0,16.3,16.6,
                    17.0,17.3,17.6,17.9,18.3,18.6,
                    18.9,19.2,19.5,19.8,20.1,
                    20.4,20.8,21.1,21.4,21.8,
                    22.1,22.4,22.8,23.1,23.4,
                    23.8,24.1,24.5,24.8,25.2,
                    25.5,25.9,26.2,26.5,26.9,
                    27.3,27.6,27.9,28.3,28.6,
                ],
                color: '#f2f200',
            },{
                name: 'BB Normal',
                data: [
                    4.2,5.5,6.6,7.5,8.2,8.8,
                    9.3,9.8,10.2,10.5,10.9,
                    11.2,11.5,11.8,12.1,12.4,
                    12.6,12.9,13.2,13.5,13.7,
                    14.0,14.3,14.6,14.9,
                    15.1,15.4,15.7,16.0,16.2,16.5,
                    16.8,17.0,17.3,17.6,17.9,
                    18.1,18.4,18.7,19.0,19.2,
                    19.5,19.8,20.1,20.4,20.7,
                    20.9,21.2,21.5,21.8,22.1,
                    22.4,22.7,22.9,23.2,23.5,
                    23.8,24.1,24.4,24.6,24.9,
                ],
                color: '#39b500',
            },{
                name: 'BB Kurang',
                data: [
                    2.4,3.1,3.9,4.5,5.0,5.4,
                    5.7,6.0,6.2,6.5,6.7,
                    6.9,7.0,7.2,7.4,7.6,
                    7.7,7.9,8.1,8.2,8.4,
                    8.6,8.7,8.9,9.0,
                    9.2,9.3,9.5,9.7,9.8,10.0,
                    10.1,10.3,10.4,10.5,10.7,
                    10.8,10.9,11.1,11.2,11.3,
                    11.4,11.6,11.7,11.8,12.0,
                    12.1,12.2,12.3,12.4,12.6,
                    12.7,12.8,12.9,13.0,13.2,
                    13.3,13.4,13.5,13.6,13.7,
                ],
                color: '#39b500',
            },{
                name: 'BB Sangat Kurang',
                data: [
                    2.0,2.8,3.4,4.0,4.4,4.8, //0-5
                    5.1,5.3,5.6,5.8,6.0, //6-10
                    6.1,6.3,6.4,6.6,6.8, //11-15
                    6.9,7.0,7.2,7.3,7.5, //16-20
                    7.6,7.8,7.9,8.1,
                    8.2,8.3,8.5,8.6,8.8,8.9,
                    9.0,9.1,9.2,9.4,9.5,
                    9.6,9.7,9.8,10.0,10.1,
                    10.2,10.3,10.4,10.5,10.6,
                    10.7,10.8,10.9,11.0,11.1,
                    11.2,11.3,11.4,11.5,11.6,
                    11.7,11.8,11.9,12.0,12.1,
                ],
                color: '#ff0000',
            },{
                type: 'scatter',
                marker: {
                    enabled: true,
                    symbol: 'cross',
                    fillColor: '#000',
                    lineColor: '#FFF'
                },
                name: 'BB',
                data: data_viewer
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    })
</script>
<style>
    table {
      border-collapse: collapse;
    }
    
    td, th {
      border: 0px;
      text-align: left;
      padding: 5px;
    }
    
    </style>
@endsection
