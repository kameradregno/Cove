@extends('layouts.app')
@section('title', 'Edit Customer')

@section('content')


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
                        <form method="post" action="{{ url("customer/$customer->id") }}">
                            @method('patch')
                            @csrf
                            <tr class="">
                                <td scope="row">
                                    <input type="text" value="{{ $customer->nama }}" class="form-control rounded-2"
                                        style="width: 155px;" name="nama" id="nama" aria-describedby="helpId"
                                        placeholder="">
                                </td>
                                <td>
                                    <input type="text" value="" class="form-control rounded-2"
                                        style="width: 155px;" name="telp" id="telp" aria-describedby="helpId"
                                        placeholder="">
                                </td>
                                <td>
                                    <input type="text" value="{{ $customer->alamat }}" class="form-control rounded-2"
                                        style="width: 155px;" name="alamat" id="alamat" aria-describedby="helpId"
                                        placeholder="">
                                </td>
                                <td>
                                    <select name="type" id="type" class="rounded-2"
                                        style="height: 37.33px; width: 155px">
                                        {{-- <option value="{{ old('type') ?? $customer->type }}">{{ $customer->type }}</option> --}}
                                        <option value="Reseller">Reseller</option>
                                        <option value="RO">RO</option>
                                        <option value="New">New</option>
                                        <option value="Shopee">Shopee</option>
                                    </select>
                                </td>
                                {{-- <td>
                                        <select name="tipe_customer" class="rounded-2" id="tipe_customer"
                                            style="width: 155px; height: 37.33px;">
                                            <option value="{{ old('tipe_customer') ?? $customer->tipe_customer }}">
                                                {{ $customer->tipe_customer }}</option>
                                            <option value="">Reseller</option>
                                            <option value="">New</option>
                                            <option value="">RO</option>
                                            <option value="">Shopee</option>
                                        </select>
                                    </td> --}}
                                <td style="font-size: 25px;"><button type="submit"
                                        style="border: 1px solid white; background-color:white;"><i
                                            class="bx bx-save text-success"></i></button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
