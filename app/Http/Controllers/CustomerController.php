<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customers::all();
        
        return view('customer.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customers::create([
            'nama' =>  $request->input('nama'),
            'telp' =>  $request->input('telp'),
            'alamat' =>  $request->input('alamat'),
            'type' =>  $request->input('type'),
        ]);

        return redirect('customer'); 
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chosen_customer = Customers::where('id', $id)->first();

        $data = [
            'customer' => $chosen_customer,
        ];

        return view('customer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Customers::where('id', $id)->update([
            'nama' =>  $request->input('nama'),
            'telp' =>  $request->input('telp'),
            'alamat' =>  $request->input('alamat'),
            'type' =>  $request->input('type'),
        ]);

        return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customers::SelectedById($id)->delete();

        return redirect('customer');
    }
}
