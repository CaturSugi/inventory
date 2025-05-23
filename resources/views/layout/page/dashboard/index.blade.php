@extends('layout.main')

@section('header')
    <div class="page-title">
        <h1>Dashboard<small>dashboard & statistics</small></h1>
    </div>
@endsection

@section('page-breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="/dasboard">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
@endsection

@section('page-content')
	<div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">{{ number_format($totalBarang) }}</h3>
                        <small>TOTAL STOK</small>
                    </div>
                    <div class="icon">
                        <i class="icon-pie-chart"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                        @php
                            // Misal: target stok maksimal 1000, sesuaikan sesuai kebutuhan
                            $targetStok = 1000;
                            $persenStok = $targetStok > 0 ? min(100, round(($totalBarang / $targetStok) * 100)) : 0;
                        @endphp
                        <span style="width: {{ $persenStok }}%;" class="progress-bar progress-bar-success green-sharp">
                            <span class="sr-only">{{ $persenStok }}% progress</span>
                        </span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            progress
                        </div>
                        <div class="status-number">
                            {{ $persenStok }}%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red-haze">{{ number_format($totalMasuk) }}</h3>
                        <small>BARANG MASUK</small>
                    </div>
                    <div class="icon">
                        <i class="icon-arrow-down"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                        @php
                            // Misal: target barang masuk maksimal 10000, sesuaikan sesuai kebutuhan
                            $targetMasuk = 10000;
                            $persenMasuk = $targetMasuk > 0 ? min(100, round(($totalMasuk / $targetMasuk) * 100)) : 0;
                        @endphp
                        <span style="width: {{ $persenMasuk }}%;" class="progress-bar progress-bar-success red-haze">
                            <span class="sr-only">{{ $persenMasuk }}% progress</span>
                        </span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            progress
                        </div>
                        <div class="status-number">
                            {{ $persenMasuk }}%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-sharp">{{ number_format($totalKeluar) }}</h3>
                        <small>BARANG KELUAR</small>
                    </div>
                    <div class="icon">
                        <i class="icon-arrow-up"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                        @php
                            // Misal: target barang keluar maksimal 10000, sesuaikan sesuai kebutuhan
                            $targetKeluar = 10000;
                            $persenKeluar = $targetKeluar > 0 ? min(100, round(($totalKeluar / $targetKeluar) * 100)) : 0;
                        @endphp
                        <span style="width: {{ $persenKeluar }}%;" class="progress-bar progress-bar-success blue-sharp">
                            <span class="sr-only">{{ $persenKeluar }}% progress</span>
                        </span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            progress
                        </div>
                        <div class="status-number">
                            {{ $persenKeluar }}%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Begin: life time stats -->
            <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                <i class="icon-bar-chart font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">Overview</span>
                <span class="caption-helper">weekly stats...</span>
                </div>
                <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
                <a href="javascript:;" class="reload">
                </a>
                <a href="javascript:;" class="fullscreen">
                </a>
                <a href="javascript:;" class="remove">
                </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active">
                    <a href="#overview_1" data-toggle="tab">
                    Stok Barang </a>
                    </li>
                    <li>
                    <a href="#overview_2" data-toggle="tab">
                    Barang Masuk </a>
                    </li>
                    <li>
                    <a href="#overview_3" data-toggle="tab">
                    Barang Keluar </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="overview_1">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Stok Tersedia</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $itemBarang)
                            <tr>
                                <td>
                                <a href="javascript:;">
                                    {{ $itemBarang->namabarang }}
                                </a>
                                </td>
                                <td>
                                {{ number_format($itemBarang->stok) }}
                                </td>
                                <td>
                                @if($itemBarang->stok > 0)
                                    <span class="label label-success">Tersedia</span>
                                @else
                                    <span class="label label-danger">Habis</span>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                    <div class="tab-pane" id="overview_2">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Masuk</th>
                                    <th>Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($masuk as $itemMasuk)
                                <tr>
                                <td>
                                    <a href="javascript:;">
                                    {{ $itemMasuk->barang ? $itemMasuk->barang->namabarang : '-' }}
                                    </a>
                                </td>
                                <td>
                                    {{ number_format($itemMasuk->jumlah) }}
                                </td>
                                <td>
                                    {{ $itemMasuk->satuan }}
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <div class="tab-pane" id="overview_3">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah Keluar</th>
                                <th>Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($keluar as $itemKeluar)
                                    <tr>
                                    <td>
                                        <a href="javascript:;">
                                        {{ $itemKeluar->barang ? $itemKeluar->barang->namabarang : '-' }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ number_format($itemKeluar->jumlah) }}
                                    </td>
                                    <td>
                                        {{ $itemKeluar->satuan }}
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- End: life time stats -->
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Begin: life time stats -->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Grafik Barang Masuk & Keluar</span>
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="fullscreen">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_tab1">
                            <div class="card-body" style="padding: 10px;">
                                <canvas id="grafikBarangMasukKeluar" height="120"></canvas>
                            </div>
                        </div>
                        <div class="tab-pane" id="portlet_tab2">
                            <div id="statistics_2" class="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: life time stats -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('grafikBarangMasukKeluar').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [
                    {
                        label: 'Barang Masuk',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        data: {!! json_encode($masukData) !!},
                        fill: true,
                        tension: 0.4
                    },
                    {
                        label: 'Barang Keluar',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        data: {!! json_encode($keluarData) !!},
                        fill: true,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Statistik 12 Bulan Terakhir'
                    }
                }
            }
        });
    </script>
@endsection