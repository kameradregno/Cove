@extends('layouts.app')

@section('title', 'Detail Pesanan')

@section('content')

    <div class="container mt-4 mb-4 rounded-2" style="background-color: white; height: 600px">
        <div class="container mt-4 rounded-2" style="background-color: white; height: auto">


            <div class="container rounded-2 d-flex justify-content-between align-items-center">
                <form class="d-flex pt-3 pb-2" role="search">
                    <div class="mb-2">
                        <label for="" class="form-label b-1">Nama Pembeli</label>
                        <input class="form-control me-2 form-sm border-secondary" type="search" placeholder="Cari Customer"
                            aria-label="Search" style="height: 30.35px" disabled />
                    </div>
                </form>

                <div class="d-flex justify-content-between">
                    <form class="d-flex pt-3 pb-2" role="search">
                        <div class="mb-2">
                            <label for="" class="form-label mb-1">Nama Pesanan</label>
                            <input class="form-control form-sm border-secondary" type="search" placeholder=""
                                value="" aria-label="Search" style="height: 30.35px" disabled />
                        </div>
                    </form>
                </div>

                <form class="d-flex pt-3 pb-2 align-items-center" role="search">
                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label mb-1">Transfer/COD</label>
                        <select name="" id="" class="rounded-2" style="height: 30.35px; width: 206.67px"
                            disabled>
                            <option value="{{-- --}}"></option>
                            <option value="">Transfer</option>
                            <option value="">COD</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="container mb-2 d-flex justify-content-start align-items-center" style="margin-top: -10px">
                <form class="d-flex pt-3 pb-2 pe-4" role="search">
                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label b-1">Alamat</label>
                        <textarea name="" id="" cols="30" rows="10" class="rounded-2" style="height: 37.35px" disabled></textarea>
                    </div>
                </form>

                <div class="d-flex">
                    <form class="d-flex pt-3 pb-2 justify-content-start ps-5 align-items-center" role="search">
                        <div class="d-flex flex-column mb-2">
                            <label for="" class="form-label mb-1">Jenis Pengiriman</label>
                            <select name="courier" id="courier" class="rounded-2"
                                style="height: 37.35px; width: 206.67px" disabled>

                                <option value="jne">JNE</option>
                                <option value="pos">POS</option>
                                <option value="tiki">TIKI</option>

                            </select>
                        </div>
                    </form>
                </div>
{{-- 
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label mb-1">Asal Kota</label>
                        <select name="origin" id="origin" class="rounded-2 form-control" required
                            style="width: 206.67px">
                            @foreach ($cities as $city)
                                <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="d-flex flex-column mb-2">
                    <label for="" class="form-label mb-1">Kota Tujuan</label>
                    <select name="destination" id="destination" class="rounded-2 form-control" required
                        style="width: 206.67px">
                        @foreach ($cities as $city)
                            <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                        @endforeach

                    </select>
                </div> --}}
            </div>

            <div class="container rounded-2" style="background-color: #f0f0f0">
                <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
                    <h5 class="pt-3 fw-bold">Pesanan</h5>

                    <a href="{{ url('orders/create') }}"
                        class="btn border-primary btn-sm d-flex align-items-center text-primary mb-3 mt-3">
                        <i class="bx bx-receipt fs-5 me-2 text-primary"></i>
                        Tambah Pesanan
                    </a>
                </div>

                <div class="table-responsive-sm pb-5 pt-2" style="overflow-y: scroll; height: 255px">
                    <table class="table">
                        <thead class="border-none">
                            <div class="container">
                                <h5 style="font-weight: 500">Sprei</h5>
                            </div>
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
                                    Catatan
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <p>King Koil</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    Rp. 1.000.000
                                </td>
                                <td style="background-color: #f0f0f0">
                                    Bisa nego gak?
                                </td>
                                <td style="background-color: #f0f0f0;"></td>
                                <td style="background-color: #f0f0f0;"></td>
                            </tr>
                        </tbody>
                        <!-- bahan dll -->
                        <thead class="border-none">
                            <tr>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jenis Bahan Sprei
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Ukuran Sprei
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <p>Wol</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>3x3</p>
                                </td>
                                <td style="background-color: #f0f0f0"></td>
                                <td style="background-color: #f0f0f0"></td>
                                <td style="background-color: #f0f0f0"></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + bantal -->
                    <table class="table">
                        <thead class="border-none">
                            <div class="container">
                                <h5 style="font-weight: 500">Bantal Tambahan</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Bahan Bantal
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jenis Bantal
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jumlah Bantal
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <p>Wol</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>Guling</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>3</p>
                                </td>
                                <td style="background-color: #f0f0f0;"></td>
                                <td style="background-color: #f0f0f0;"></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + bc -->
                    <table class="table">
                        <thead class="border-none">
                            <div class="container">
                                <h5 style="font-weight: 500">Bed Cover</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Bahan Bed Cover
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jenis Bed Cover
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jumlah Bed Cover
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <p>Katun</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    BC Big Foam
                                </td>
                                <td style="background-color: #f0f0f0">
                                    4
                                </td>
                                <td style="background-color: #f0f0f0;"></td>
                                <td style="background-color: #f0f0f0;"></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + inner cover -->
                    <table class="table">
                        <thead class="border-none">
                            <div class="container">
                                <h5 style="font-weight: 500">Inner Cover</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Bahan Inner Cover
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jenis Inner Cover
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jumlah Inner Cover
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <p>Katun</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>King Koil</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>5</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + quilt cover -->
                    <table class="table">
                        <thead class="border-none">
                            <div class="container">
                                <h5 style="font-weight: 500">Quilt Cover</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Bahan Quilt Cover
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jenis Quilt Cover
                                </th>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jumlah Quilt Cover
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <p>Katun</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>Halus</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>8</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + box sprei -->
                    <table class="table">
                        <thead class="border-none">
                            <div class="container">
                                <h5 style="font-weight: 500">Box Sprei</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jumlah Box Sprei
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <p>8</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + karet -->
                    <table class="table">
                        <thead class="border-none">
                            <div class="container">
                                <h5 style="font-weight: 500">Karet</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                            background-color: #f0f0f0;
                                            font-weight: 400;
                                        "
                                    class="fw-bold">
                                    Jenis Karet
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <p>Karet Keliing</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-3 d-flex justify-content-end">

                <button type="submit" class="btn btn-primary ms-1 d-flex align-items-center">
                    <i class="bx bx-check" style="font-size: 25px;"></i>
                </button>
            </div>
        </div>
    </div>

@endsection
