@extends('layouts.app')

@section('title', 'Tambah Item')

@section('content')

    <div class="container mt-2 mb-1 rounded-2" style="background-color: white; height: 520px">
        <div class="container pt-4 rounded-2" style="background-color: white; height: auto">


            <div class="container rounded-2 pt-3" style="background-color: #f0f0f0">
                <div class="container  rounded-2 align-items-center">
                    <h5 class="fw-bold">Tambah Barang Pesanan</h5>
                </div>
                <div class="table-responsive-sm pb-5 pt-2" style="overflow-y: scroll; height: 380px">
                    <table class="table">
                        <thead class="border-secondary">
                            <div class="container">
                                <h5 style="font-weight: 500">Sprei</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Nama Sprei
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Harga
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Catatan
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                                                                    width: 155px;
                                                                                    background-color: #f0f0f0;
                                                                                "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <textarea name="" class="rounded-2"
                                        style="
                                            height: 37.33px;
                                            background-color: #f0f0f0;
                                        "
                                        id="" cols="30" rows="10"></textarea>
                                </td>
                                <td style="background-color: #f0f0f0;"></td>
                                <td style="background-color: #f0f0f0;"></td>
                            </tr>
                        </tbody>
                        <!-- bahan dll -->
                        <thead class="border-none">
                            <tr>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jenis Bahan Sprei
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Ukuran Sprei
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <select name=""
                                        style="
                                            height: 37.33px;
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        class="rounded-2" id="">
                                        <option value="">Katun</option>
                                        <option value="">Wol</option>
                                    </select>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="Cari Ukuran" />
                                </td>
                                <td style="background-color: #f0f0f0"></td>
                                <td style="background-color: #f0f0f0"></td>
                                <td style="background-color: #f0f0f0"></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + bantal -->
                    <table class="table">
                        <thead class="border-secondary">
                            <div class="container">
                                <h5 style="font-weight: 500">Bantal Tambahan</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Bahan Bantal
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jenis Bantal
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jumlah Bantal
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <select name=""
                                        style="
                                            height: 37.33px;
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        class="rounded-2" id="">
                                        <option value="">Katun</option>
                                        <option value="">Wol</option>
                                    </select>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + bc -->
                    <table class="table">
                        <thead class="border-secondary">
                            <div class="container">
                                <h5 style="font-weight: 500">Bed Cover</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Bahan Bed Cover
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jenis Bed Cover
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jumlah Bed Cover
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <select name=""
                                        style="
                                            height: 37.33px;
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        class="rounded-2" id="">
                                        <option value="">Katun</option>
                                        <option value="">Wol</option>
                                    </select>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + inner cover -->
                    <table class="table">
                        <thead class="border-secondary">
                            <div class="container">
                                <h5 style="font-weight: 500">Inner Cover</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Bahan Inner Cover
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jenis Inner Cover
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jumlah Inner Cover
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <select name=""
                                        style="
                                            height: 37.33px;
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        class="rounded-2" id="">
                                        <option value="">Katun</option>
                                        <option value="">Wol</option>
                                    </select>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + quilt cover -->
                    <table class="table">
                        <thead class="border-secondary">
                            <div class="container">
                                <h5 style="font-weight: 500">Quilt Cover</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Bahan Quilt Cover
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jenis Quilt Cover
                                </th>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jumlah Quilt Cover
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <select name=""
                                        style="
                                            height: 37.33px;
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        class="rounded-2" id="">
                                        <option value="">Katun</option>
                                        <option value="">Wol</option>
                                    </select>
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + box sprei -->
                    <table class="table">
                        <thead class="border-secondary">
                            <div class="container">
                                <h5 style="font-weight: 500">Box Sprei</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jumlah Box Sprei
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <input type="text" class="form-control rounded-2 border-secondary"
                                        style="
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        name="" id="" aria-describedby="helpId" placeholder="" />
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- + Karet -->
                    <table class="table">
                        <thead class="border-secondary">
                            <div class="container">
                                <h5 style="font-weight: 500">Karet</h5>
                            </div>
                            <tr>
                                <th scope="col"
                                    style="
                                        background-color: #f0f0f0;
                                        font-weight: 400;
                                    ">
                                    Jenis Karet
                                </th>
                                <th style="background-color: #f0f0f0"></th>
                                <th style="background-color: #f0f0f0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-secondary">
                                <td style="background-color: #f0f0f0">
                                    <select name=""
                                        style="
                                            height: 37.33px;
                                            width: 155px;
                                            background-color: #f0f0f0;
                                        "
                                        class="rounded-2" id="">
                                        <option value="">Keliling</option>
                                        <option value="">Anti Geser</option>
                                    </select>
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                                <td style="background-color: #f0f0f0">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="mt-3 d-flex justify-content-end">
                <a class="btn btn-danger d-flex align-items-center">
                    <i class="bx bx-x" style="font-size: 25px;"></i>
                </a>
                <button type="submit" class="btn btn-success ms-1 d-flex align-items-center">
                    <i class="bx bx-save" style="font-size: 25px;"></i>
                </button>
            </div>
        </div>
    </div>

@endsection
