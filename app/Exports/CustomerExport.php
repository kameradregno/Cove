<?php

namespace App\Exports;

use App\Models\Customers;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CustomerExport implements FromView
{
    public function view(): View
    {

        $customers = ['customers' => Customers::all()];

        return view('customer.tabel', $customers);
    }
}