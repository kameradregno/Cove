<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
                    return number_format($item->notelp);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customers $customer)
    {
        return view('customer.edit', compact('customer'));
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
