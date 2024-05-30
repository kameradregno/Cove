<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ForgetPasswordManagerController extends Controller
{
    function ForgetPassword(){
        return view("forgetpassword");
    }

    function forgetpasswordPost(Request $request){
        $request->validate([
            'email' => "required|email|exists:users",
        ]);

        $token = Str::random(64);

        DB::table('password_reset')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("emails.resetpassword", ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject("reset password");
        });

        return redirect()->to(route("forgetpassword"))
        ->with("success", "we have send an email to reset password");

    }

    function resetPassword($token){
        return view("newpassword", compact('token'));
    }

    function resetPasswordPost(Request $request){
        $request->validate([
            "email" => "required|email|exists:users",
            "password" => 'required|string|min:3|max:10|confirmed',
            "password_confirmation" => "required",
        ]);

        $updatePassword = DB::table('password_reset')
        ->where([
            "email" => $request->email,
            "token" => $request->token,
        ])->first();

        if(!$updatePassword){
            return redirect()->to(route("resetpassword"))->with("error", "invalid");
        }

        user::where("email", $request->email)
        ->update(["password" => Hash::make($request->password)]);

        DB::table("password_reset")->where(["email" => $request->email])->delete();

        return redirect()->to(route("login"))->with("success", "Password reset success");

    }

}
