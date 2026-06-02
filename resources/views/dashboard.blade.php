@extends('main')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div id="container" style="min-height: 450px;"></div>
        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Jumlah Mahasiswa Universitas MDP'
                },
                subtitle: {
                    text: 'Sumber: Aplikasi Akademik'
                },
                xAxis: {
                    categories: {!! json_encode($categories) !!},
                    crosshair: true,
                    accessibility: {
                        description: 'Jurusan'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Mahasiswa'
                    }
                },
                tooltip: {
                    valueSuffix: ' mahasiswa'
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Mahasiswa',
                    data: {!! json_encode($counts) !!}
                }]
            });
        });
    </script>
@endsection

@section('footer')
    Grafik menampilkan jumlah mahasiswa per prodi berdasarkan data saat ini.
@endsection
