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
                    <h3 class="font-bold">Pendapatan customer tertinggi</h3>
                    <div class="relative overflow-x-auto overflow-y-scroll sm:rounded-lg mt-3" style="height: 200px;">
                        <table class="w-100 text-sm text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jumlah Order
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pendapatan
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @php $counter = 1 @endphp
                                @foreach ($customers as $customer)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 text-center dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-1.5 py-1">
                                            {{ $counter++ }}
                                        </td>
                                        <td class="px-1.5 py-1">
                                            {{ $customer->nama }}
                                        </td>
                                        <td class="px-1.5 py-1">
                                            {{ $customer->orders->count() }}
                                        </td>
                                        <td class="px-1.5 py-1">
                                            {{ $customer->items->sum('harga_sprei') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="flex-wrap p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-5 mb-3 space-x-4">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div
                        class="flex flex-col sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 pt-1 px-2">
                        <div>
                        </div>

                        <form action="{{ url('owner') }}" method="GET">

                            <div class="relative flex items-center space-x-2">

                                <a href=" {{ url('owner/create') }} "
                                    class="text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create</a>
                            </div>
                        </form>


                    </div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pendapatan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->roles }}
                                    </td>
                                    <td class="px-6 py-4">
                                        p
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ url("owner/$user->id/edit") }}"><button
                                                class="text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button></a>
                                        <button type="button" data-modal-target="modal-user{{ $user->id }}"
                                            data-modal-toggle="modal-user{{ $user->id }}"
                                            class="text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div id="modal-user{{ $user->id }}" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal-user{{ $user->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Tutup</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah
                                                    anda yakin ingin menghapus akun ini?</h3>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Data pada customer juga akan terhapus!</h3>
                                                <form action="{{ url("owner/$user->id") }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button data-modal-hide="modal-user{{ $user->id }}" type="submit"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                        Ya
                                                    </button>
                                                </form>
                                                <button data-modal-hide="modal-user{{ $user->id }}" type="button"
                                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <nav class="items-center flex-col flex-wrap md:flex-row justify-between pt-4"
                    aria-label="Table navigation">

                    {{ $users->links('pagination::tailwind') }}

                </nav>

                @yield('js')
            </div>
    </body>

    </html>

@endsection
