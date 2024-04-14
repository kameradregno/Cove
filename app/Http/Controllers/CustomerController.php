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
        if (request()->ajax()) {

            $query = Customers::query();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a href="'.route('customer.edit', $item->id).'">
                            <i class="bx-bx pencil text-warning" style="font-size: 25px;"></i>
                        </a>
                        
                        <form class="inline-block" method="POST" action="' . route("customer.destroy", $item->id) . '">
                    ' . method_field('delete') . csrf_field() . '

                        <button type="button">
                            <i class="bx-bx trash text-danger" style="font-size: 25px;"></i>
                        </button>
                    ';
                })
                ->editColumn('notelp', function ($item) {
                    return number_format($item->telp);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('customer.index');
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
            'tipe_customer' =>  $request->input('tipe_customer'),
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
            'tipe_customer' =>  $request->input('tipe_customer'),
        ]);

        return redirect('student');
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
