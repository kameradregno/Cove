@extends('layouts.app')

@section('title', 'Pesanan')

@section('content')

@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="p-3 pt-5 sm:ml-60">
    <div class="p-3 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex flex-col sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 pt-1 px-2">

                <div>
                    <form action="{{ route('orders.index') }}" method="GET">
                        <label for="table-search" class="sr-only">Search</label>

                        <div class="relative flex items-center space-x-2">

                            <div class="input-group flex items-center space-x-2">
                                <input type="text" name="ordersearch" id="ordersearch" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari pesanan">

                                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Search
                                </button>

                            </div>

                            <a href="{{ url('orders/create') }}" class="text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create</a>

                        </div>

                    </form>

                    

                </div>

            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pemesan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pembeli
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Pesanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ date('d/m/y', strtotime($order->created_at)) }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $order->nama_pesanan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->customername->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->items->sum('harga_sprei') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->items->count() }}
                        </td>
                        <td class="px-50 py-4">

                            <a href="{{ url("orders/$order->id/edit") }}"><button class="text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button></a>

                            <a href="{{ url("orders/$order->id") }}"><button class="text-white bg-gray-500 hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail</button></a>

                            <button type="button" data-modal-target="modal-order{{ $order->id }}" data-modal-toggle="modal-order{{ $order->id }}" class="text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>

                        </td>
                    </tr>

                    <!-- Modal -->
                    <div id="modal-order{{ $order->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-order{{ $order->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Tutup</span>
                                </button>
                                <div class="p-4 md:p-5 text-center">
                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <h3 class="mb-2 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah
                                        anda yakin ingin menghapus data ini?</h3>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Data barang pesanan juga akan terhapus!</h3>
                                    <form action="{{ url("orders/$order->id") }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button data-modal-hide="modal-order{{ $order->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                            Ya
                                        </button>
                                    </form>
                                    <button data-modal-hide="modal-order{{ $order->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        <nav class="items-center flex-col flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">

            {{ $orders->links('pagination::tailwind') }}

        </nav>

    </div>
</div>
@endsection