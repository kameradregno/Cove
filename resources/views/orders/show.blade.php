@extends('layouts.app')

@section('title', 'Detail Pesanan')

@section('content')

    <div class="container mb-4 rounded-2" style="background-color: white; height: 210px;margin-top:8rem">

        <div class="container mt-4 rounded-2" style="background-color: white; height: auto">
            <div class="container rounded-2 d-flex justify-content-between align-items-center">
                <form class="d-flex pt-3 pb-2" role="search">
                    <div class="mb-2">
                        <label for="" class="form-label b-1">Nama Pembeli</label>
                        <input class="form-control me-2 form-sm border-secondary" value="{{ $data->customername->nama }}"
                            style="height: 37.35px" disabled />
                    </div>
                </form>

                <div class="d-flex justify-content-between">
                    <form class="d-flex pt-3 pb-2" role="search">
                        <div class="mb-2">
                            <label for="" class="form-label mb-1">Nama Pesanan</label>
                            <input class="form-control form-sm border-secondary" value="{{ $data->nama_pesanan }}"
                                name="nama_pesanan" id="nama_pesanan" style="height: 37.35px" disabled />
                        </div>
                    </form>
                </div>

                <form class="d-flex pt-3 pb-2 align-items-center" role="search">
                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label mb-1">Metode Pembayaran</label>
                        <select name="nama_pembayaran" id="nama_pembayaran" class="rounded-2"
                            style="height: 37.35px; width: 206.67px" disabled>
                            <option value="{{ $data->metode_pembayaran }}">{{ $data->metode_pembayaran }}</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="container mb-2 d-flex justify-content-between align-items-center" style="margin-top: -10px">
                <form class="d-flex pt-3 pb-2" role="search">
                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label b-1">Alamat</label>
                        <textarea name="" id="" cols="30" rows="10" class="rounded-2"
                            style="height: 37.35px; width: 206.66px" disabled>{{ $data->alamat }}</textarea>
                    </div>
                </form>

                <div class="d-flex">
                    <form class="d-flex pt-3 pb-2 justify-content-between align-items-center" role="search">
                        <div class="d-flex flex-column mb-2">
                            <label for="" class="form-label mb-1">Jenis Pengiriman</label>
                            <select name="courier" id="courier" class="rounded-2" style="height: 37.35px; width: 206.67px"
                                disabled>
                                <option value="{{ $data->jenis_pengiriman }}">{{ $data->jenis_pengiriman }}</option>
                            </select>
                        </div>
                    </form>
                </div>

                <div class="d-flex-justify-content-between pt-4">
                    <a href="{{ url("items/$data->id") }}" class="btn btn-primary btn-md text-center"
                        style="width:206px"><i class="bx bx-package"></i>
                        Ke Item Pesanan</a>
                </div>

            </div>

            {{-- <div class="container rounded-2" style="background-color: #f0f0f0">
                <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
                    <h5 class="pt-3 fw-bold">Barang Pesanan</h5>

                    <a href="{{ url('items/create') }}"
                        class="btn border-primary btn-sm d-flex align-items-center text-primary mb-3 mt-3">
                        <i class="bx bx-receipt fs-5 me-2 text-primary"></i>
                        Tambah Barang
                    </a>
                </div>

                <div class="table-responsive rounded-2" style="overflow-y: scroll;">
                    <table class="table">
                        <thead class="">
                            <tr>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Nama Sprei
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Harga
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jenis
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Ukuran
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr class="">
                                    <td style="background-color: #f0f0f0">
                                        <p> {{ $item->nama_sprei }} </p>
                                    </td>
                                    <td style="background-color: #f0f0f0">
                                        {{ $item->harga_sprei }}
                                    </td>
                                    <td style="background-color: #f0f0f0">
                                        {{ $item->bahan_sprei }}
                                    </td>
                                    <td style="background-color: #f0f0f0">
                                        {{ $item->ukuran_sprei }}
                                    </td>
                                    <td style="background-color: #f0f0f0;"><i class="bx bx-x" style="font-size: 25px"></i>
                                    </td>
                                    <td style="background-color: #f0f0f0;"><i class="bx bx-pencil"
                                            style="font-size: 25px"></i>
                                    </td>
                                    <td style="background-color: #f0f0f0;"><i class="bx bx-detail"
                                            style="font-size: 25px"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}

        </div>
    </div>

@endsection
