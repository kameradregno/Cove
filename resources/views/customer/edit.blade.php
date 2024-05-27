<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Customer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased dark:bg-gray-900 dark:text-white">

    <div class="flex justify-center items-center min-h-screen pt-10 px-4 md:px-0">
        <!-- Added px-4 for padding on small screens -->

        <div
            class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 flex flex-col items-center w-full md:w-full lg:max-w-7xl">
            <!-- Adjusted max-width for large screens -->

            <!-- Heading -->
            <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white">Edit Customer</h2>

            <form class="w-full"  method="post" action="{{ url("customer/$customer->id") }}">
                @method('patch')
                @csrf
                <div class="mb-5">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ $customer->nama }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>

                <div class="mb-5">
                    <label for="order-name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer
                        Telepon</label>
                    <input type="text" id="telp" name="telp" value="{{ $customer->telp }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>

                <div class="mb-5">
                    <label for="type"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <textarea id="alamat" name="alamat" value="{{ $customer->alamat }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>{{ $customer->alamat }}</textarea>
                </div>

                <div class="mb-5">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                        Customer</label>
                    <select name="type" id="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                        <option value="Reseller">Reseller</option>
                        <option value="RO">RO</option>
                        <option value="New">New</option>
                        <option value="Shopee">Shopee</option>
                    </select>
                </div>

                <div class="flex
                            justify-center">
                    <button type="submit"
                        class="mt-5 text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                </div>

            </form>

        </div>

    </div>

</body>

</html>