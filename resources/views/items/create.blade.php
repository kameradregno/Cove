@extends('layouts.app')

@section('title', 'Barang Pesanan')

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
                    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Tambah Barang Pesanan</h2>


                    <form class="w-full" method="POST" action="{{ route('items.store', $id) }}">
                        @csrf

                        <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Sprei</h2>

                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Sprei <span class="text-red-500">*</span></label>
                            <input type="hidden" name="order_id" id="order_id" value="{{ $id }}">
                            <input type="hidden" name="customer_id" id="customer_id" value="{{ $customerid }}">
                            <input type="hidden" name="user_id" id="user_id" value="{{ $userid }}">
                            <input type="text" name="nama_sprei" id="nama_sprei"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="payment-method"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                            <textarea name="catatan" id="catatan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                ></textarea>
                        </div>

                        <div class="mb-5">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan
                                Sprei <span class="text-red-500">*</span></label>
                            <select name="bahan_sprei" id="bahan_sprei"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option value="Katun">Katun</option>
                                <option value="Wol">Wol</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran
                                Sprei <span class="text-red-500">*</span></label>
                            <input type="text" name="ukuran_sprei" id="ukuran_sprei"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="order-name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                                Total <span class="text-red-500">*</span></label>
                            <input type="number" name="harga_sprei" id="harga_sprei"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>

                        <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Bantal Tambahan</h2>

                        <div class="mb-5">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan
                                Bantal</label>
                            <select name="bahan_bantal" id="bahan_bantal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Kosong</option>
                                <option value="Katun">Katun</option>
                                <option value="Wol">Wol</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Bantal</label>
                            <input type="text" name="jenis_bantal" id="jenis_bantal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                Bantal</label>
                            <input type="text" name="jumlah_bantal" id="jumlah_bantal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Bed Cover</h2>


                        <div class="mb-5">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan
                                Bed Cover</label>
                            <select name="bahan_bedcover" id="bahan_bedcover"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Kosong</option>
                                <option value="Katun">Katun</option>
                                <option value="Wol">Wol</option>
                            </select>
                        </div>


                        <div class="mb-5">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Bed Cover</label>
                            <input type="text" name="jenis_bedcover" id="jenis_bedcover"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>


                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                Bed
                                Cover</label>
                            <input type="text" name="jumlah_bedcover" id="jumlah_bedcover"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Inner Cover</h2>

                        <div class="mb-5">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan
                                Inner Cover</label>
                            <select name="bahan_inner" id="bahan_inner"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Kosong</option>
                                <option value="Katun">Katun</option>
                                <option value="Wol">Wol</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Inner Cover</label>
                            <input type="text" name="jenis_inner" id="jenis_inner"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                Inner
                                Cover</label>
                            <input type="text" name="jumlah_inner" id="jumlah_inner"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Quilt Cover</h2>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan
                                Quilt
                                Cover</label>
                            <select name="bahan_quilt" id="bahan_quilt"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Kosong</option>
                                <option value="Katun">Katun</option>
                                <option value="Wol">Wol</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Quilt
                                Cover</label>
                            <input type="text" name="jenis_quilt" id="jenis_quilt"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                Quilt
                                Cover</label>
                            <input type="text" name="jumlah_quilt" id="jumlah_quilt"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Box Sprei</h2>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                Box
                                Sprei</label>
                            <input type="text" name="jumlah_box" id="jumlah_box"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Karet</h2>

                        <div class="mb-5">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                karet</label>
                            <select name="jenis_karet" id="jenis_karet"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Kosong</option>
                                <option value="Keliling">Keliling</option>
                                <option value="Anti Geser">Anti Geser</option>
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

    </div>

    @endsection
