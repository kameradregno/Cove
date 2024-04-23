@extends('layouts.app')

@section('Title', 'Edit Pesanan')
    
@section('content')
    
<div class="container pt-1 rounded-2" style="background-color: white; height: 630px">
    <div class="container mt-4 rounded-2" style="background-color: white; height: auto">
        <div class="container mt-4 rounded-2 d-flex justify-content-between align-items-center">
            <h5 class="">Tambah Pesanan</h5>
        </div>

        <div class="container rounded-2 d-flex justify-content-between align-items-center">
            <form class="d-flex pt-3 pb-2" role="search">
                <div class="mb-2">
                    <label for="" class="form-label b-1">Nama Pembeli</label>
                    <input class="form-control me-2 form-sm border-secondary" type="search" placeholder="Cari Customer" aria-label="Search" style="height: 30.35px">
                </div>
            </form>

        <div class="d-flex justify-content-between">
                <form class="d-flex pt-3 pb-2" role="search">
                    <div class="mb-2">
                        <label for="" class="form-label mb-1">Nama Pesanan</label>
                        <input class="form-control form-sm border-secondary" type="search" placeholder="" aria-label="Search" style="height: 30.35px">
                    </div>
                </form>
            </div>

        <form class="d-flex pt-3 pb-2 align-items-center" role="search">
                <div class="d-flex flex-column mb-2">
                    <label for="" class="form-label mb-1">Transfer/COD</label>
                    <select name="" id="" class="rounded-2" style="height: 30.35px; width: 206.67px">
                        <option value="">Transfer</option>
                        <option value="">COD</option>
                    </select>
                </div>
            </form>
        </div>

        

        

            <div class="container mb-2 d-flex justify-content-start align-items-center" style="margin-top: -10px">
                <form class="d-flex pt-3 pb-2 pe-4" role="search">
                    <div class="d-flex flex-column mb-2">
                        <label for="" class="form-label b-1">Alamat</label>
                        <textarea name="" id="" cols="30" rows="10" class="rounded-2" style="height: 37.35px"></textarea>
                    </div>
                </form>

                <div class="d-flex">
                    <form class="d-flex pt-3 pb-2 justify-content-start ps-5 align-items-center" role="search">
                        <div class="d-flex flex-column mb-2">
                            <label for="" class="form-label mb-1">Jenis Pengiriman</label>
                            <select name="courier" id="courier" class="rounded-2" style="height: 37.35px; width: 206.67px" required="">

                                <option value="jne">JNE</option>
                                <option value="pos">POS</option>
                                <option value="tiki">TIKI</option>

                            </select>
                        </div>
                    </form>
                </div>

            </div>

            

            <div class="container mt-4 d-flex justify-content-between align-items-center" style="margin-top: -10px">

                

            </div>

        <div class="mt-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-success ms-1 d-flex align-items-center">
                <i class="bx bx-save" style="font-size: 25px;"></i>
            </button>
        </div>
    </div>
</div>

@endsection