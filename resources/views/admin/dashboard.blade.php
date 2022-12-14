@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row row-cards text-muted">
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Penjualan</div>
                    <div class="ml-auto lh-1">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Last 7 days</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                <a class="dropdown-item" href="#">Last 30 days</a>
                                <a class="dropdown-item" href="#">Last 3 months</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h1 mb-3 text-blue">75</div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card card-sm">
          <div class="card-body d-flex align-items-center">
            <span class="bg-blue text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
            </span>
            <div class="mr-0">
              <div class="font-weight-medium">
                132 Sales
              </div>
              <div class="text-muted">12 waiting payments</div>
            </div>
          </div>
        </div>
      </div>
    <div class="col-lg-12 col-xlg-3 col-md-12">
        <div class="white-box">
                <div class="overlay-box">
                    <div class="user-content">
                        <center><h3>Selamat Datang !</h3></center>
                        <center><h2>Sistem Pengelolaan Data Barang dan Keuangan</h2></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xlg-3 col-md-12">
        <div class="white-box">
            <div class="user-bg">
                <center><img width="45%" alt="user" src="{{ asset('assets/plugins/images/logo-klontong.png') }}"></center>
            </div>
        </div>
    </div>
</div>
<!-- /.row (main row) -->
@endsection

@push('scripts')
<!-- ChartJS -->
<script src="{{ asset('AdminLTE-2/bower_components/chart.js/Chart.js') }}"></script>
<script>
$(function() {
    // Get context with jQuery - using jQuery's .get() method.
    var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvas);

    var salesChartData = {
        labels: {{ json_encode($data_tanggal) }},
        datasets: [
            {
                label: 'Pendapatan',
                fillColor           : 'rgba(60,141,188,0.9)',
                strokeColor         : 'rgba(60,141,188,0.8)',
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: {{ json_encode($data_pendapatan) }}
            }
        ]
    };

    var salesChartOptions = {
        pointDot : false,
        responsive : true
    };

    salesChart.Line(salesChartData, salesChartOptions);
});
</script>
@endpush