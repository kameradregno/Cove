@extends('layouts.app')

@section('js')
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
@endsection

@section('title', 'Dashboard')

@section('content')

    <div class="container mt-4ht pt-3">

        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                                Pendapatan Tiap Bulan
                            </div>
                            <div class="card-body">
                                <canvas class="chart" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                                Pendapatan Tertinggi
                            </div>
                            <div class="container">
                                <div>{!! $chart->container() !!}</div>
                            </div>

                            {{-- <canvas class="chart" width="400" height="200"> --}}
                            {{-- </canvas> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <span><i class="bi bi-table me-2"></i></span> Daftar Customer Tertinggi
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped data-table" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Bulan ini</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rakha</td>
                                                <td>30.000.000</td>
                                                <td>100.000.000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
            </div>
    </div>
    @yield('js')
    </body>
    </div>



@endsection
