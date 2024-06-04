<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Orders;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\PendapatanPerBulanChart;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PendapatanPerBulanChart $chart)
    {
        // dd(Auth::user()->roles);
        if(!Auth::check()){
            return redirect('login');
        }elseif(Auth::user()->roles != 'admin') {
            return redirect('/owner');
        }
            $customers = Customers::query(); // Mulai membangun kueri
            // $ordersQuery = Orders::query(); // Mulai membangun kueri
        
            $customers = $customers->paginate(6);    
    
            return view('dashboard.dashboard', ['chart' => $chart->build()], compact('customers'));    
        
        // dd(Auth::user()->roles);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function edit(string $id)
    {
        //
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
