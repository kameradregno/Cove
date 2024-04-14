@extends('layouts.app')

@section('title', 'Customer')

@section('content')

<div class="container mt-4 rounded-2" style="background-color: white; height: 515px">
    <div class="container mt-4 rounded-2" style="background-color: white; height: auto">
        <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
            <h5 class="pt-3 pb-2">Daftar Customer</h5>
            <a href="{{ url('customer/create') }}"
                class="btn border-primary btn-sm d-flex align-items-center text-primary">
                <i class="bx bx-user-plus fs-5 me-2 text-primary"></i>
                Tambah Customer
            </a>
        </div>

        <div class="container" style="height: 415px; overflow-y: scroll;">
            <div class="table-responsive">
            <table id="example" class="table table-striped data-table" style="width: 100%">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Nomer HP</th>
                        <th>Alamat</th>
                        <th>Tipe Customer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>19/2/23</td>
                        <td>Rakha</td>
                        <td>081384428789</td>
                        <td>Pakistan</td>
                        <td>Reseller</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdropCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Perhatian
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data customer ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                    Ya
                </button>
                <button type="button" class="btn btn-outline-secondary">
                    Tidak
                </button>
            </div>
        </div>
    </div>
</div>

@endsection