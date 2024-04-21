<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orders.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {

         $response = Http::withHeaders([
            'key' => 'ee4eb6fc840c8b581f6f52aacd86e664'
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $response['rajaongkir']['results'];
        return view('orders.create', ['cities' => $cities, 'ongkir' => '']);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function cekOngkir(Request $request)
    {

         $response = Http::withHeaders([
            'key' => 'ee4eb6fc840c8b581f6f52aacd86e664'
        ])->get('https://api.rajaongkir.com/starter/city');

         $responseCost = Http::withHeaders([
            'key' => 'ee4eb6fc840c8b581f6f52aacd86e664'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => $request->origin,
            'desntination' => $request->destination,
            'weight' => $request->weight,
            'courier' => $request->courier,
        ]);

        dd($responseCost->json());

        $cities = $response['rajaongkir']['results'];
        $ongkir = $response['rajaongkir']['results'];

        return view('orders.create', ['cities' => $cities, 'ongkir' => $ongkir]);

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
         return view('orders.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
