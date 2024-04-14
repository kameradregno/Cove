<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="shortcut icon" href="/frontend/images/logo.png" type="image/x-icon" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <style>
        body {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>

    @extends('layouts.app')

    @section('content')
        <div class="container mt-4">
            <h6 class="text-center">Halo, User</h6>
            <h4 class="text-center fw-light">
                Aktivitas apa yang ingin anda lakukan hari ini?
            </h4>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="card border-light mx-auto mb-3" style="width: 22rem; height: 167px;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h4 class="card-title text-center">Tambah Customer</h4>
                    </div>
                </div>
                <div class="card border-light mx-auto mb-3" style="width: 22rem; height: 167px;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h4 class="card-title text-center">Tambah Pesanan</h4>
                    </div>
                </div>
                <div class="card border-light mx-auto mb-3" style="width: 22rem; height: 167px;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h4 class="card-title text-center">Pendapatan Bulan Ini</h4>
                    </div>
                </div>
                <div class="card border-light mx-auto mb-3" style="width: 22rem; height: 167px;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h4 class="card-title text-center">Note Dari Ibu</h4>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
