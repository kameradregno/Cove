@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')

<form action="{{ route('customer.update', $customer->id) }}" class="w-full" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PATCH')


    <div class="container mt-4 rounded-2" style="background-color: white; height: auto">
        <div class="container mt-4 rounded-2" style="background-color: white; height: auto">
            <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
                <h5 class="pt-3 pb-2">Edit Customer</h5>
            </div>
            <div class="table-responsive-sm pb-5 pt-4">
                <table class="table table-bg-white">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Alamat</th>
                            <th>Tipe Customer</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">
                                <input type="text" class="form-control rounded-2" style="width: 155px;" name=""
                                    id="" aria-describedby="helpId" placeholder="">
                            </td>
                            <td>
                                <input type="text" class="form-control rounded-2" style="width: 155px;" name=""
                                    id="" aria-describedby="helpId" placeholder="">
                            </td>
                            <td>
                                <input type="text" class="form-control rounded-2" style="width: 155px;" name=""
                                    id="" aria-describedby="helpId" placeholder="">
                            </td>
                            <td>
                                <input type="text" class="form-control rounded-2" style="width: 155px;" name=""
                                    id="" aria-describedby="helpId" placeholder="">
                            </td>
                            <td>
                                <select name="tipe_customer" class="rounded-2" id="tipe_customer"
                                    style="width: 155px; height: 37.33px;">
                                    <option value="{{ old('tipe_customer') ?? $customer->tipe_customer }}">{{ $customer->tipe_customer }}</option>
                                    <option value="">Reseller</option>
                                    <option value="">New</option>
                                    <option value="">RO</option>
                                    <option value="">Shopee</option>
                                </select>
                            </td>
                            <td style="font-size: 25px;"><button type="submit"><i class="bx bx-save text-success"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</form>

@endsection
