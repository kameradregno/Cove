<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Orders;
use Illuminate\Support\Str;
use App\Http\Requests\ItemCreateRequest;

class ItemController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemCreateRequest $request)
    {
        $item = Items::create([
            'item' => $request->item,
            'order_id' => $request->order_id,
        ]);

        return redirect('orders');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //    //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     Items::SelectedById($id)->delete();
    //     return redirect('orders');
    // }

}
