@extends('layouts.app')

@section('Title', 'Edit Pesanan')

@section('content')

    <div class="container pt-1 mt-5 rounded-2" style="background-color: white; height: 630px">
        <div class="container mt-4 rounded-2" style="background-color: white; height: auto">
            <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
                <h5 class="">Edit Pesanan</h5>
            </div>

            <form method="post" action="{{ url("order/$order->id") }}">
                @method('patch')
                @csrf
                <div class="container rounded-2 mt-3 d-flex justify-content-between align-items-center">
                    <div class="mb-2">
                        <label for="" class="form-label b-1">Nama Pembeli</label>
                        <input class="form-control me-2 form-sm border-secondary" value="{{ $order->customername->nama }}"
                            placeholder="Cari Customer" style="height: 37.35px" disabled>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="mb-2">
                            <label for="" class="form-label mb-1">Nama Pesanan</label>
                            <input class="form-control form-sm border-secondary" name="nama_pesanan" id="nama_pesanan"
                                value="{{ $order->nama_pesanan }}" style="height: 37.35px">
                        </div>

                    </div>

                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label mb-1">Transfer/COD</label>
                        <select name="metode_pembayaran" id="metode_pembayaran" class="rounded-2"
                            style="height: 37.35px; width: 206.67px">
                            <option value="TRANSFER">Transfer</option>
                            <option value="COD">COD</option>
                        </select>
                    </div>
                </div>

                <div class="container mb-2 mt-3 d-flex justify-content-between align-items-center"
                    style="margin-top: -10px">
                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label b-1">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="10" class="rounded-2"
                            style="height: 37.35px; width: 206.66px">{{ $order->alamat }}</textarea>
                    </div>

                    <div class="d-flex">
                        <div class="d-flex flex-column mb-2">
                            <label for="" class="form-label mb-1">Jenis Pengiriman</label>
                            <select name="jenis_pengiriman" id="jenis_pengiriman" class="rounded-2"
                                style="height: 37.35px; width: 206.67px" required="">
                                <option value="JNE">JNE</option>
                                <option value="POS">POS</option>
                                <option value="TIKI">TIKI</option>
                            </select>
                        </div>
            </form>
        </div>

        <div class="d-flex-justify-content-between pt-4">
            <button type="submit" class="btn btn-success btn-md text-center" style="width:206px"><i class="bx bx-save"></i>
                Simpan</button>
        </div>

    </div>
    </div>
    </div>

@endsection
