@extends('layouts.app')

@section('title', 'Tambah Pesanan')

@section('content')

    <div class="container pt-1 rounded-2" style="background-color: white; height: 310px; margin-top:3rem">
        <form method="POST" action="{{ url('orders') }}">
            @csrf

            <div class="container mt-4 rounded-2" style="background-color: white; height: auto">
                <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
                    <h5 class="">Tambah Pesanan</h5>
                </div>

                <div class="container rounded-2 mt-4 d-flex justify-content-between align-items-center">

                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label b-1">Nama Pembeli</label>

                        <select name="customer_id" id="nama_pembeli" class="form-control" style="width: 206.67px">
                            @foreach ($customers as $customer)
                                <option value="{{ $customer['id'] }}">{{ $customer['nama'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">

                        <div class="d-flex flex-column mb-2">
                            <label for="" class="form-label b-1">Nama Pesanan</label>
                            <input class="form-control form-sm border-secondary" type="text" placeholder="Nama Pesanan"
                                name="nama_pesanan" id="nama_pesanan" />
                        </div>

                    </div>

                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label b-1">Metode Pembayaran</label>
                        <select name="metode_pembayaran" id="metode_pembayaran" class="rounded-2"
                            style="height: 37.6px; width: 206.67px">
                            <option value="TRANSFER">Transfer</option>
                            <option value="COD">COD</option>
                        </select>
                    </div>

                </div>

                <div class="container mb-2 mt-2 d-flex justify-content-start align-items-center"
                    style="margin-top: -10px; gap:8.1rem">
                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label b-1">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="10" class="rounded-2"
                            style="height: 37.35px;width: 206.67px"></textarea>
                    </div>

                    <div class="d-flex justify-content-start">
                        <div class="d-flex flex-column mb-2">
                            <label for="" class="form-label mb-1">Jenis Pengiriman</label>
                            <select name="jenis_pengiriman" id="jenis_pengiriman" class="rounded-2"
                                style="height: 37.35px; width: 206.67px">
                                <option value="JNE">JNE</option>
                                <option value="POS">POS</option>
                                <option value="TIKI">TIKI</option>

                            </select>
                        </div>
                    </div>

                    <div class="d-flex-justify-content-between pt-4">
                        <button type="submit" class="btn btn-primary btn-md text-center" style="width:206px"><i
                                class="bx bx-plus"></i>
                            Tambah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
