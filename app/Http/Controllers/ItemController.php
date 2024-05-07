<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $id = ['id' => $request->route('id')]; // Assuming you only need the ID

        return view('items.index', $id); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $id = ['id' => $request->route('id')]; // Assuming you only need the ID
      
        return view('items.create', $id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $id = $request->route('id');

<<<<<<< HEAD
        Items::create($data);
        
        return redirect("items/{$id}"); 
=======
        return redirect('items.show'); 
>>>>>>> 7287d29d861ca0a5530d733c0b7d2d4105c592ec
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request) // Assuming you're not using route model binding
    {
        $id = $request->route('id');

        $data = Items::where( 'id', $id )->first();

        return view('items.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
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
    public function update(Request $request, $id)
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
