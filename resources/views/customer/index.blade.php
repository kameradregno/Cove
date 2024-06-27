@extends('layouts.app')

@section('title', 'Customer')

@section('content')

@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="p-5 sm:ml-60">
    @if(session('status'))
        <div class="alert alert-suscess" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if(session('status'))
        <div class="alert alert-suscess" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex flex-col sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 pt-1 px-2">
                <div>
                    <strong class="ps-2">Daftar Customer</strong>
                </div>

                <form action="{{ route('customers.index') }}" method="GET">
                    <label for="table-search" class="sr-only">Search</label>

                    <div class="relative flex items-center space-x-2">

                        <button type="button" id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex w-40 items-center text-green-500 bg-white border border-green-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-green-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-green-800 dark:text-white dark:border-green-600 dark:hover:bg-green-700 dark:hover:border-green-600 dark:focus:ring-green-700">
                            <svg class="w-5 h-5 me-2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <title>file_type_excel2</title>
                                <path d="M28.781,4.405H18.651V2.018L2,4.588V27.115l16.651,2.868V26.445H28.781A1.162,1.162,0,0,0,30,25.349V5.5A1.162,1.162,0,0,0,28.781,4.405Zm.16,21.126H18.617L18.6,23.642h2.487v-2.2H18.581l-.012-1.3h2.518v-2.2H18.55l-.012-1.3h2.549v-2.2H18.53v-1.3h2.557v-2.2H18.53v-1.3h2.557v-2.2H18.53v-2H28.941Z" style="fill:#20744a;fill-rule:evenodd" />
                                <rect x="22.487" y="7.439" width="4.323" height="2.2" style="fill:#20744a" />
                                <rect x="22.487" y="10.94" width="4.323" height="2.2" style="fill:#20744a" />
                                <rect x="22.487" y="14.441" width="4.323" height="2.2" style="fill:#20744a" />
                                <rect x="22.487" y="17.942" width="4.323" height="2.2" style="fill:#20744a" />
                                <rect x="22.487" y="21.443" width="4.323" height="2.2" style="fill:#20744a" />
                                <polygon points="6.347 10.673 8.493 10.55 9.842 14.259 11.436 10.397 13.582 10.274 10.976 15.54 13.582 20.819 11.313 20.666 9.781 16.642 8.248 20.513 6.163 20.329 8.585 15.666 6.347 10.673" style="fill:#ffffff;fill-rule:evenodd" />
                            </svg>
                            Export
                            <svg class="w-2.5 h-2.5 ms-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownRadio" class="z-10 w-40 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                            <ul class="p-1 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                                <li>
                                    <a href="{{ url('customer/export/excel') }}">
                                        <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-green-900 rounded dark:text-green-300">.XLSX</label>
                                        </div>
                                    </a>
                                </li>
                                <!-- <li>
                                    <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <a href="">
                                            <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-green-900 rounded dark:text-green-300">.CSV</label>
                                        </a>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <!-- <form action="/" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <input type="file" name="file">
                                <button type="submit">Import</button>
                            </div>
                        </form> -->

                        <div class="input-group flex items-center space-x-2 "> <!-- Group input -->
                            <input type="text" name="searchcustomer" id="searchcustomer" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-70 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari customer">
                            <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Search
                            </button>
                        </div>

                        <a href=" {{ url('customer/create') }} " class="text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create</a>
                    </div>
                </form>


            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomer Hp
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipe Customer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ date('d/m/y', strtotime($customer->created_at)) }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $customer->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $customer->telp }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $customer->alamat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $customer->type }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ url("customer/$customer->id/edit") }}"><button class="text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button></a>
                            <button type="button" data-modal-target="modal-customer{{ $customer->id }}" data-modal-toggle="modal-customer{{ $customer->id }}" class="text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div id="modal-customer{{ $customer->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-customer{{ $customer->id }}">
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
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Data pesanan juga akan terhapus!</h3>
                                    <form action="{{ url("customer/$customer->id") }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button data-modal-hide="modal-customer{{ $customer->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                            Ya
                                        </button>
                                    </form>
                                    <button data-modal-hide="modal-customer{{ $customer->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <nav class="items-center flex-col flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">

            {{ $customers->links('pagination::tailwind') }}

        </nav>

    </div>
</div>
@endsection