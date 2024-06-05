<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\PendapatanPerBulanChart;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Customers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
   public function index(PendapatanPerBulanChart $chart)
{
    // dd(Auth::check());
    if (!Auth::check()) {
        return redirect('login');
    } elseif (Auth::user()->roles != 'Owner') {
        return redirect('/admin');
    }

    $customers = Customers::all(); 

    $users = User::paginate(3); 

    return view('owner.owner', ['chart' => $chart->build()], compact('users', 'customers')); 
}

    public function usercreate()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        return view('owner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function userstore(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:10|confirmed',
        ]);

        //  proses pendaftaran user baru , menyimpan data tersebut ke dalam tabel 'users' menggunakan method create() pada model User. //
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'roles' => $request->input('roles'),
        ]);

        return redirect('owner')->with("success_message", "berhasil membuat akun");
    }

    public function useredit($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $chosen_user = User::where('id', $id)->first();

        $user = [
            'user' => $chosen_user,
        ];

        return view('owner.edit', $user);
    }

    public function userupdate(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        // $request->validate([
        //     'name' => 'required|min:4|max:20',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:3|max:10',
        // ]);

        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'roles' => $request->input('roles'),
        ]);

        return redirect('owner');
    }

    public function userdestroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = User::find($id);
        $user->delete();

        return redirect('owner');
    }
}
