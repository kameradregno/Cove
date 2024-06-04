@extends('layouts.app')

@section('js')
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
@endsection

@section('title', 'Dashboard')

@section('content')

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased dark:bg-white dark:text-dark/50">

        <div class="p-4 sm:ml-60">

            {{-- <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
                <p>Chart 1</p>
            </div> --}}

            <div class="flex flex-wrap p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-20 space-x-4 ">
                <div class="flex-1">
                    <h3 class="font-bold">Pendapatan Tiap Bulan</h3>
                    <div>{!! $chart->container() !!}</div>
                </div>
                <div class="flex-1">
                    <!-- Add another div for more charts or content if needed -->
                    <h3 class="font-bold">Pendapatan Tiap Tahun</h3>
                </div>
            </div>

            <div class="flex flex-wrap p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-5 mb-3 space-x-4 ">
                <div class="flex-1">
                    <h3 class="font-bold pb-4">Pesanan Terbanyak</h3>
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-55 text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
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
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($customers as $customer) --}}
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4">
                                        p
                                    </td>
                                    <td class="px-6 py-4">
                                        p
                                    </td>
                                    <td class="px-6 py-4">
                                        p
                                    </td>
                                    <td class="px-6 py-4">
                                        p
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                    {{-- <nav class="flex items-center flex-col flex-wrap md:flex-row justify-between pt-4"
                        aria-label="Table navigation">
                        <span
                            class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
                            <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                                class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav> --}}
                </div>
                <div class="flex-1">
                    <!-- Add another div for more charts or content if needed -->
                    <h3 class="font-bold">Pendapatan Tiap Tahun</h3>
                </div>
            </div>
            @yield('js')
        </div>
    </body>

    </html>

@endsection
