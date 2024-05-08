@extends('layouts.app')

@section('title', 'Barang Pesanan')

@section('content')

    <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
        <h5 class="pb-4">Daftar Barang Pesanan</h5>
        <a href="{{ url("items/create/$id") }}" class="btn border-primary btn-sm d-flex align-items-center text-primary mb-4">
            <i class="bx bx-package fs-5 me-2 text-primary"></i>
            Tambah Item Pesanan
        </a>
    </div>

    <div class="container rounded-2 " style="background-color: white">
        <div class="container pb-4 pt-3 align-items-center justify-content-between d-flex">
            <input type="search" name="" id="" class="form-control rounded-2 border-secondary"
            placeholder="Cari Barang" style="width: 160px; height: 32px">
        <div class="dropdown">
            <button class="btn btn-white border-dark btn-sm dropdown-toggle" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Cari Berdasarkan...
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        </div>
        
    </div>

    <div class="container rounded-2" style="height: 465px; background-color:white; overflow-y:scroll">
        <div class="table-responsive rounded-2">
            <table id="example" class="table data-table rounded-2">

                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Sprei</th>
                        <th>Harga</th>
                        <th>Bahan</th>
                        <th>Ukuran</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($items as $item)
                        <tr>
                            <td>{{ date('d/m/y', strtotime($item->created_at)) }}</td>
                            <td>{{ $item->nama_sprei }}</td>
                            <td>{{ $item->harga_sprei }}</td>
                            <td>{{ $item->bahan_sprei }}</td>
                            <td>{{ $item->ukuran_sprei }}</td>
                            <td>

                                <a href="{{ url("items/$item->id/edit") }}" style="text-decoration:none;">
                                    <i class="bx bx-pencil text-warning" style="font-size: 25px;"></i>
                                </a>
                            </td>

                            <td>
                                <a href="{{ url("items/$item->id") }}" style="text-decoration:none;">
                                    <i class="bx bx-detail text-secondary" style="font-size: 25px;"></i>
                                </a>
                            </td>

                            <td>
                                <button type="button" class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdropItem"
                                    style="font-size: 25px; border: 1px solid white; background-color:white;"><i
                                        class="bx bx-x text-danger"></i></button>
                            </td>

                        </tr>

                        <!-- Modal -->

                        <div class="modal fade" id="staticBackdropItem" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                        Anda yakin ingin menghapus barang ini?
                                    </div>

                                    <div class="modal-footer">

                                        <form action="{{ url("items/$item->id") }}" method="POST">
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
