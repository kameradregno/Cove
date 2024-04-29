@extends('layouts.app')

@section('title', 'Tambah Item')

@section('content')

    <div class="container mt-2 mb-1 rounded-2" style="background-color: white; height: 525px">
        <div class="container pt-4 rounded-2" style="background-color: white; height: auto">

            <div class="container rounded-2 pt-3" style="background-color: #f0f0f0">
                <div class="container  rounded-2 pb-2 align-items-center">
                    <h5 class="fw-bold">Daftar Barang Pesanan</h5>
                </div>

                <div class="table-responsive-sm pb-5 pt-2" style="overflow-y: scroll; height: 410px">
                    <div class="container">
                        <h5 style="font-weight: 500">Sprei</h5>
                    </div>
                    <table class="table">
                        <thead class="border-none">

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
                    <div class="container">
                        <h5 style="font-weight: 500">Bantal Tambahan</h5>
                    </div>
                    <table class="table">
                        <thead class="border-none">

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
                    <div class="container">
                        <h5 style="font-weight: 500">Bed Cover</h5>
                    </div>
                    <table class="table">
                        <thead class="border-none">

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
                    <div class="container">
                        <h5 style="font-weight: 500">Inner Cover</h5>
                    </div>
                    <table class="table">
                        <thead class="border-none">

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
                    <div class="container">
                        <h5 style="font-weight: 500">Quilt Cover</h5>
                    </div>
                    <table class="table">
                        <thead class="border-none">

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
                    <div class="container">
                        <h5 style="font-weight: 500">Box Sprei</h5>
                    </div>
                    <table class="table">
                        <thead class="border-none">

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
                    <div class="container">
                        <h5 style="font-weight: 500">Karet</h5>
                    </div>
                    <table class="table">
                        <thead class="border-none">

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
                <a class="btn btn-primary d-flex align-items-center" href="{{ url('orders') }}">
                    <i class="bx bx-check" style="font-size: 25px;"></i>
                </a>
            </div>
        </div>
    </div>

@endsection
