<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Items::all();

        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['items'] = Items::all();
        return view('items.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Items::create($data);

        return redirect('items'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Items::where( 'id', $id )->first();

        return view('items.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chosen_item = Items::where('id', $id)->first();

        $data = [
            'item' => $chosen_item,
        ];

        return view('items.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Items::where('id', $id)->update([
            'nama_sprei' =>  $request->input('nama_sprei'),
            'harga_sprei' =>  $request->input('harga_sprei'),
            'catatan' =>  $request->input('catatan'),
            'bahan_sprei' =>  $request->input('bahan_sprei'),
            'ukuran_sprei' =>  $request->input('ukuran_sprei')
        ]);

        return redirect('items');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Items::SelectedById($id)->delete();

        return redirect('items');
    }
}
