<?php

namespace App\Exports;

use App\Models\Items;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrderExport implements FromView
{
    public function view(): View
    {
        $data = Items::all();

        $items = ['items' => $data];

        return view('orders.tabel', $items);
    }
}
