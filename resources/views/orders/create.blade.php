@extends('layouts.app')

@section('title', 'Customer')

@section('content')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="p-4 sm:ml-64">

        <div class="mt-14">

            <div class="flex justify-center items-center min-h-screen pt-10 px-4 md:px-0">
                <!-- Added px-4 for padding on small screens -->

                <div
                    class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 flex flex-col items-center w-full md:w-full lg:max-w-7xl">
                    <!-- Adjusted max-width for large screens -->

                    <!-- Heading -->
                    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Tambah Pesanan</h2>

                    <form class="w-full" method="POST" action="{{ url('orders') }}">
                        @csrf
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Pembeli</label>
                            <select name="customer_id" id="nama_pembeli"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer['id'] }}">{{ $customer['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="order-name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Pesanan</label>
                            <input type="text" name="nama_pesanan" id="nama_pesanan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="payment-method"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode
                                Pembayaran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option value="TRANSFER">Transfer</option>
                                <option value="COD">COD</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <textarea name="alamat" id="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required></textarea>
                        </div>

                        <div class="mb-5">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Pengiriman</label>
                            <select name="jenis_pengiriman" id="jenis_pengiriman"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option value="JNE">JNE</option>
                                <option value="POS">POS</option>
                                <option value="TIKI">TIKI</option>
                            </select>
                        </div>

                        <div class="flex justify-center">
                            <button type="submit"
                                class="mt-5 text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
