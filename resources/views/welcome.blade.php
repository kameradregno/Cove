@extends('layouts.app')

@section('title', 'Pesanan')

@section('content')

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased dark:bg-gray-800 dark:text-dark/50">

        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">

                <h1 class="font-medium text-center"> Halo Rakha Nurrahma Rizki </h1>
                <p class="text-center">Aktivitas apa yang ingin anda lakukan ?</p>

            </div>

            <!-- Cards Section -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6">

                <!-- Dashboard Card -->

                <div
                    class="max-w-sm mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dashboard</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Manage your dashboard settings and view
                            your statistics.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Go to Dashboard
                        </a>
                    </div>
                </div>

                <!-- Customer Card -->

                <div
                    class="max-w-sm mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Customer</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">View and manage your customer
                            information.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Go to Customer
                        </a>
                    </div>
                </div>

                <!-- Pesanan Card -->

                <div
                    class="max-w-sm mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pesanan</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">View and manage your Pesanan
                            information.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Go to Pesanan
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </body>

    </html>

@endsection
