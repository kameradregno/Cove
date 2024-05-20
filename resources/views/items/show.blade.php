@extends('layouts.app')

@section('title', 'Tambah Item')

@section('content')

    <div class="container mt-2 mb-1 rounded-2" style="background-color: white; height: 525px">
        <div class="container pt-4 rounded-2" style="background-color: white; height: auto">

            <div class="container rounded-2 pt-3" style="background-color: #f0f0f0">
                <div class="container  rounded-2 pb-2 align-items-center">
                    <h5 class="fw-bold">Daftar Barang Pesanan</h5>
                </div>

                <div class="table-responsive-sm pb-5 pt-2" style="overflow-y: scroll; height: 370px">
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
                                    <p>{{ $data->nama_sprei }}</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    Rp.{{ $data->harga_sprei }}
                                </td>
                                <td style="background-color: #f0f0f0">
                                    {{ $data->catatan }}
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
                                    {{ $data->bahan_sprei }}
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>{{ $data->ukuran_sprei }}</p>
                                </td>
                                <td style="background-color: #f0f0f0"></td>
                                <td style="background-color: #f0f0f0"></td>
                                <td style="background-color: #f0f0f0"></td>
                            </tr>
                        </tbody>
                    </table>
                    @if (! $data->bahan_bantal == null)
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
                                    {{ $data->bahan_bantal }}
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>{{ $data->jenis_bantal }}</p>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <p>{{ $data->jumlah_bantal }}</p>
                                </td>
                                <td style="background-color: #f0f0f0;"></td>
                                <td style="background-color: #f0f0f0;"></td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                    @if (! $data->bahan_bedcover == null)
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
                                                        <p>{{ $data->bahan_bedcover }}</p>
                                                    </td>
                                                    <td style="background-color: #f0f0f0">
                                                        {{ $data->bahan_bedcover }}
                                                    </td>
                                                    <td style="background-color: #f0f0f0">
                                                        {{ $data->bahan_bedcover }}
                                                    </td>
                                                    <td style="background-color: #f0f0f0;"></td>
                                                    <td style="background-color: #f0f0f0;"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                    
                    @endif

                    @if (! $data->bahan_inner == null)
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
                                                        <p>{{ $data->bahan_inner }}</p>
                                                    </td>
                                                    <td style="background-color: #f0f0f0">
                                                        <p>{{ $data->bahan_inner }}</p>
                                                    </td>
                                                    <td style="background-color: #f0f0f0">
                                                        <p>{{ $data->bahan_inner }}</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                    
                    @endif

                    @if (! $data->bahan_quilt == null)
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
                                                        <p>{{ $data->bahan_quilt }}</p>
                                                    </td>
                                                    <td style="background-color: #f0f0f0">
                                                        <p>{{ $data->bahan_quilt }}</p>
                                                    </td>
                                                    <td style="background-color: #f0f0f0">
                                                        <p>{{ $data->bahan_quilt }}</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                    
                    @endif

                    @if (! $data->jumlah_box == null)
                    
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
                                    <p>{{ $data->jumlah_box }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif

                    @if (! $data->jenis_karet == null)
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
                                                        <p>{{ $data->jenis_karet }}</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                    
                    @endif
                </div>
            </div>


            <div class="mt-3 d-flex justify-content-end">
                <a class="btn btn-primary d-flex align-items-center" href="{{ url("items/$data->order_id") }}">
                    <i class="bx bx-check" style="font-size: 25px;"></i>
                </a>
            </div>
        </div>
    </div>

@endsection
