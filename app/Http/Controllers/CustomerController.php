<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Orders;
use App\Models\Items;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $search = $request->query('searchcustomer', ''); // Get search term with default empty string
        $customers = Customers::query(); // Start building the query
    
        if ($search) {
            $customers->where('nama', 'LIKE', "%{$search}%"); // Perform search on 'nama_customer'
        }
    
        $customers = $customers->get(); // Retrieve all matching customers
    
        return view('customer.index', compact('customers', 'search'));
    }
        
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

          if(!Auth::check()){
            return redirect('login');
        }

        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

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

          if(!Auth::check()){
            return redirect('login');
        }

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

          if(!Auth::check()){
            return redirect('login');
        }

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

          if(!Auth::check()){
            return redirect('login');
        }

        // $order = Orders::where('customer_id', $id);
        // $order_id = $order->get('id');
        // // $orderr = $order_id->gettype('id');
        // $item = Items::where('order_id', $order_id[0]);
        // // $get_item = $item->get();
        // // dd($order_id);
        // dd($item);

        // if ($item) {
        //     $item->delete();
        //     $order->delete();
        
        // }else if ($order) {
        //     $order->delete();
        // }
        
        Customers::SelectedById($id)->delete();

        return redirect('customer');
    }
}
