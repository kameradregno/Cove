@extends('layouts.app')

@section('title', 'Customer')

@section('content')

@vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
        <h5 class="pb-4">Daftar Customer</h5>
        <a href="{{ url('customer/create') }}" class="btn border-primary btn-sm d-flex align-items-center text-primary mb-4">
            <i class="bx bx-user-plus fs-5 me-2 text-primary"></i>
            Tambah Customer
        </a>
    </div>

    <div class="container" style="background-color: white; border-radius: 6px 6px 0px 0px;">
        <div class="container pb-4 pt-3 align-items-center justify-content-between d-flex">
            <form action="{{ route('customers.index') }}" method="GET">
                <div class="input-group" style="width: 190px;">
                  <input type="search" name="searchcustomer" id="searchcustomer" class="form-control border-secondary"
                         placeholder="Cari Customer" style="height: 32px;">
                  <button class="btn btn-secondary btn-sm" type="submit"><i class="bx bx-search"></i></button>
                </div>
              </form>
              
            <div class="dropdown">
                <button class="btn btn-white border-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class='bx bx-filter-alt'></i> Cari Berdasarkan...
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="container"
        style="height: 465px; background-color:white; overflow-y:scroll;  border-radius: 6px 6px 0px 0px ;">
        <div class="table-responsive rounded-2">
            <table id="example" class="table data-table rounded-2">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Nomer HP</th>
                        <th>Alamat</th>
                        <th>Tipe Customer</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ date('d/m/y', strtotime($customer->created_at)) }}</td>
                            <td>{{ $customer->nama }}</td>
                            <td>{{ $customer->telp }}</td>
                            <td>{{ $customer->alamat }}</td>
                            <td>{{ $customer->type }}</td>
                            <td>
                                <a href="{{ url("customer/$customer->id/edit") }}" style="text-decoration:none;">
                                    <i class="bx bx-pencil text-warning" style="font-size: 25px;"></i>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdropCustomer"
                                    style="font-size: 25px; border: 1px solid white; background-color:white;"><i
                                        class="bx bx-trash text-danger"></i></button>
                            </td>
                        </tr>


                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdropCustomer" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                            <i class="bx bxs-error text-danger me-2 " style="font-size: 25px"></i>Perhatian
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Anda yakin ingin menghapus data customer ini?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ url("customer/$customer->id") }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                                Ya
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Tidak
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>





@endsection
