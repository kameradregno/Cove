@extends('layouts.app')

@section('title', 'Pesanan')

@section('content')

    <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
        <h5 class="pb-4">Daftar Pesanan</h5>
        <a href="{{ url('orders/create') }}" class="btn border-primary btn-sm d-flex align-items-center text-primary mb-4">
            <i class="bx bx-receipt fs-5 me-2 text-primary"></i>
            Tambah Pesanan
        </a>
    </div>

    <div class="container rounded-2" style="height: 530px; background-color:white; overflow-y:scroll">
        <div class="table-responsive rounded-2">
            <table id="example" class="table data-table rounded-2" style="overflow-y:scroll">

                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Pembeli</th>
                        <th>Nama Pesanan</th>
                        <th>Total Harga</th>
                        <th>Total Pesanan</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $order)
                        <tr>

                            <td>{{ date('d/m/y', strtotime($order->created_at)) }}</td>
                            <td>{{ $order->customername->nama }}</td>
                            <td>{{ $order->nama_pesanan }}</td>
                            <td>5m zimbabwe</td>
                            <td>100</td>
                            <td>

                                <a href="{{ url("orders/$order->id/edit") }}" style="text-decoration:none;">
                                    <i class="bx bx-pencil text-warning" style="font-size: 25px;"></i>
                                </a>
                            </td>

                            <td>
                                <a href="{{ url("orders/$order->id") }}" style="text-decoration:none;">
                                    <i class="bx bx-detail text-secondary" style="font-size: 25px;"></i>
                                </a>
                            </td>

                            <td>
                                <button type="button" class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdropOrder"
                                    style="font-size: 25px; border: 1px solid white; background-color:white;"><i
                                        class="bx bx-trash text-danger"></i></button>
                            </td>

                        </tr>

                        <!-- Modal -->

                        <div class="modal fade" id="staticBackdropOrder" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                            <i class="bx bxs-error text-danger me-2 " style="font-size: 25px"></i>Perhatian
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        Anda yakin ingin menghapus data order ini?
                                    </div>

                                    <div class="modal-footer">

                                        <form action="{{ url("orders/$order->id") }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                                Ya
                                            </button>
                                        </form>

                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Tidak
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>





@endsection
