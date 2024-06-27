<?php

namespace App\Imports;

use App\Models\Customers;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;

class CustomersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $id = Auth::user()->id;
        dd($id);

        return new Customers([
            'user_id' => $id,
            'nama' => $row[0],
            'telp' => $row[1],
            'alamat' => $row[2],
            'type' => $row[3],
        ]);
    }
}
