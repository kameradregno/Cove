@extends('layouts.app')

@section('title', 'Customer')

@section('content')

@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="p-4 sm:ml-64">
    <div class="mt-14">
        <div class="flex min-h-screen pt-10 px-4 md:px-0">
            <!-- Added px-4 for padding on small screens -->
            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 flex flex-col w-full md:w-full lg:max-w-7xl">
                <!-- Adjusted max-width for large screens -->
                <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Sprei</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Nama Sprei</h2>
                        <p>{{ $data->nama_sprei }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Harga</h2>
                        <p>Rp.{{ $data->harga_sprei }}</p>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="mb-2 font-bold">Catatan</h2>
                    <p>{{ $data->catatan }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Bahan Sprei</h2>
                        <p>{{ $data->bahan_sprei }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Ukuran Sprei</h2>
                        <p>{{ $data->ukuran_sprei }}</p>
                    </div>
                </div>

                @if ($data->bahan_bantal)
                <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Bantal Tambahan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Bahan Bantal</h2>
                        <p>{{ $data->bahan_bantal }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Jenis Bantal</h2>
                        <p>{{ $data->jenis_bantal }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Jumlah Bantal</h2>
                        <p>{{ $data->jumlah_bantal }}</p>
                    </div>
                </div>
                @endif

                @if ($data->bahan_bedcover)
                <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Bed Cover</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Bahan Bed Cover</h2>
                        <p>{{ $data->bahan_bedcover }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Jenis Bed Cover</h2>
                        <p>{{ $data->jenis_bedcover }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Jumlah Bed Cover</h2>
                        <p>{{ $data->jumlah_bedcover }}</p>
                    </div>
                </div>
                @endif

                @if ($data->bahan_inner)
                <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Inner Cover</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Bahan Inner Cover</h2>
                        <p>{{ $data->bahan_inner }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Jenis Inner Cover</h2>
                        <p>{{ $data->jenis_inner }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Jumlah Inner Cover</h2>
                        <p>{{ $data->jumlah_inner }}</p>
                    </div>
                </div>
                @endif

                @if ($data->bahan_quilt)
                <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Quilt Cover</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Bahan Quilt Cover</h2>
                        <p>{{ $data->bahan_quilt }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Jenis Quilt Cover</h2>
                        <p>{{ $data->jenis_quilt }}</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="mb-2 font-bold">Jumlah Quilt Cover</h2>
                        <p>{{ $data->jumlah_quilt }}</p>
                    </div>
                </div>
                @endif

                @if ($data->jumlah_box)
                <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Box Sprei</h2>
                <div class="mb-5">
                    <h2 class="mb-2 font-bold">Jumlah Box</h2>
                    <p>{{ $data->jumlah_box }}</p>
                </div>
                @endif

                @if ($data->jenis_karet)
                <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Karet</h2>
                <div class="mb-5">
                    <h2 class="mb-2 font-bold">Jenis Karet</h2>
                    <p>{{ $data->jenis_karet }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
