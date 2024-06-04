<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\PendapatanPerBulanChart;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(PendapatanPerBulanChart $chart)
    {
        if(!Auth::check()){
            return redirect('login');
        }elseif(Auth::user()->roles != 'owner') {
            return redirect('/admin');
        }
        return view('owner.owner', ['chart' => $chart->build()]);
    }
}
