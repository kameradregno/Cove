<?php

namespace App\Exports;

use App\Models\Items;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrderExport implements FromView
{
    public function view(): View
    {
        $data = Items::orderBy('order_id')->get();

        $items = ['items' => $data];

        return view('orders.tabel', $items);
    }
}
