<?php

namespace App\Http\Controllers;

use App\Exports\CustomerExport;
use App\Imports\CustomersImport;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Items;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $id = Auth::user()->id;
        // dd($id);

        $search = $request->query('searchcustomer', ''); // Dapatkan istilah pencarian dengan string kosong default
        $customers = Customers::where('user_id', $id); // Mulai membangun kueri

        if ($search) {
            $customers->where('nama', 'LIKE', "%{$search}%"); // Lakukan pencarian pada 'nama_customer'
        }

        $customers = $customers->paginate(6);

        return view('customer.index', compact('customers', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        $userid = Auth::user()->id;
        $id = ['userid' => $userid]; // Assuming you only need the ID


        return view('customer.create', $id);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        try {
            Customers::create([
                'nama' => $request->input('nama'),
                'user_id' => $request->input('user_id'),
                'telp' => $request->input('telp'),
                'alamat' => $request->input('alamat'),
                'type' => $request->input('type'),
            ]);
        } catch (QueryException $e) {
            $errorMessage = 'Nama customer sudah dibuat!';
            return redirect('customer/create')->withErrors($errorMessage);
        }

        return redirect('customer');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {

        if (!Auth::check()) {
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

        if (!Auth::check()) {
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

        if (!Auth::check()) {
            return redirect('login');
        }

        $order = Orders::where('customer_id', $id);
        // $orderr = $order_id->gettype('id');
        $item = Items::where('customer_id', $id);
        // $get_item = $item->get();
        // dd($order_id);
        // dd($item);

        if ($item) {
            $item->delete();
            $order->delete();
        } else if ($order) {
            $order->delete();
        }

        Customers::SelectedById($id)->delete();

        return redirect('customer');
    }

    function export_excel() {
        return Excel::download(new CustomerExport, "customer.xlsx");
    }

    function import_excel(Request $request) {
        $file =  $request->file('file');
        // dd($file);
        
        Excel::import(new CustomersImport, $file);

        return redirect('/')->withStatus('file is All good!');


    }


    // Debug isi Tabel
    public function tabel(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $customers = ['customers' => Customers::all()];

        return view('customer.tabel', $customers);
    }

}
