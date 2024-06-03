<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Customers;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $search = $request->query('ordersearch', ''); 
        $orders = Orders::query();

        if ($search) {
            $orders->where('nama_pesanan', 'LIKE', "%{$search}%"); // Perform search on 'nama_customer'
        }

        $orders = $orders->get();
        
        return view('orders.index', compact('orders', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

          if(!Auth::check()){
            return redirect('login');
        }

    $data['customers'] = Customers::all();
    return view('orders.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $data = $request->all();

        Orders::create($data);

        return redirect('orders'); 
    }

    /**
     * Display the specified resource.
     */
    
    public function show($id)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $data = Orders::where( 'id', $id )->first();

        return view('orders.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $chosen_order = Orders::where('id', $id)->first();

        $data = [
            'order' => $chosen_order,
        ];

        return view('orders.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        Orders::where('id', $id)->update([
            'nama_pesanan' =>  $request->input('nama_pesanan'),
            'metode_pembayaran' =>  $request->input('metode_pembayaran'),
            'alamat' =>  $request->input('alamat'),
            'jenis_pengiriman' =>  $request->input('jenis_pengiriman'),
        ]);

        return redirect('orders');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(string $id)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $item = Items::where('order_id', $id);
        if ($item) {
            $item->delete();
        }

        Orders::SelectedById($id)->delete();

        return redirect('orders');
    }

}
