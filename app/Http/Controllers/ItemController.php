<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $search = $request->query('searchitem', ''); // Get search term with default empty string
        $idtaker = $request->route('id');

        $id = ['id' => $idtaker]; 

        $itemsemua = Items::all();

        // $hitam = Items::where('order_id', 'like', '1');
        if ($search) {
            $itemjadi = $itemsemua->whereIn('order_id', $idtaker) // Remove 'like' here
            ->where('nama_sprei', 'like', "%{$search}%");
        dd($itemjadi);
        }else{
            $itemjadi = $itemsemua->where('order_id', 'like',"$idtaker");
            
            // dd($itemjadi);
        }

        if ($id) {
            $itemCount = Items::where('order_id', $id)->count(); // Count items for this order
        } else {
            $itemCount = 0; // Handle cases where no order ID is provided
        }

        $items = [
            'items' => $itemjadi,
            'itemCount' => $itemCount,
        ];
        // dd($items);
        return view('items.index', $id, $items); 
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $idorder = $request->route('id');
        $idcustomer = Orders::where('id', $idorder)->get('customer_id');
        $customer_id = substr($idcustomer, strpos($idcustomer, ':') + 1, -1);
        $customerid = str_replace('}', '', $customer_id);

        $id = ['id' => $idorder, 'customerid' => $customerid]; // Assuming you only need the ID
    
        return view('items.create', $id,);
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

        // dd($data);

        $id = $request->route('id');
        Items::create($data);
        
        return redirect("items/{$id}"); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request) // Assuming you're not using route model binding
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $id = $request->route('id');

        $data = Items::where( 'id', $id )->first();

        return view('items.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $id_string = $request->route('id');
        $id_order_string = $request->route('id_order');


        $items = Items::where('id', $id_string)->first();;
        // $itemfilter = $itemsemua->where('id', 'like',"$id_string");

        $data = [
            'data' => $items,
        ];
        $id = ['id' => $id_string, 'id_order' => $id_order_string];
        // $id_order = ['id_order' => $id_order_string];

        // dd($data);

        return view('items.edit', $data, $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $id = $request->route('id');
        $id_order = $request->route('id_order');

        Items::where('id', $id)->update([
            'nama_sprei' =>  $request->input('nama_sprei'),
            'harga_sprei' =>  $request->input('harga_sprei'),
            'catatan' =>  $request->input('catatan'),
            'bahan_sprei' =>  $request->input('bahan_sprei'),
            'ukuran_sprei' =>  $request->input('ukuran_sprei'),
            'bahan_bantal' =>  $request->input('bahan_bantal'),
            'jenis_bantal' =>  $request->input('jenis_bantal'),
            'jumlah_bantal' =>  $request->input('jumlah_bantal'),
            'bahan_bedcover' =>  $request->input('bahan_bedcover'),
            'jenis_bedcover' =>  $request->input('jenis_bedcover'),
            'jumlah_bedcover' =>  $request->input('jumlah_bantal'),
            'bahan_inner' =>  $request->input('bahan_inner'),
            'jenis_inner' =>  $request->input('jenis_inner'),
            'jumlah_inner' =>  $request->input('jumlah_inner'),
            'bahan_quilt' =>  $request->input('bahan_quilt'),
            'jenis_quilt' =>  $request->input('jenis_quilt'),
            'jumlah_quilt' =>  $request->input('jumlah_quilt'),
            'jumlah_box' =>  $request->input('jumlah_box'),
            'jenis_karet' =>  $request->input('jenis_karet'),
        ]);

        return redirect("items/$id_order");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }

        $id = $request->route('id');
        $id_order = $request->route('id_order');

        Items::SelectedById($id)->delete();

        return redirect("items/$id_order");
    }
}
