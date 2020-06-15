<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function index()
    {
        return view("auth.login");
    }
    function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $hashPassword = Hash::make($password);
        $user = DB::table("users")->where(["username" => $username])->first();
        $existingHashFromDb = $user->password;

        if ($user) {
            if (Hash::check($password, $existingHashFromDb)) {
                if ($user->role == "adimin") {
                    // return redirect('/admin/dashboard');
                    return redirect()->route('/admin.dashboard');
                } else {
                    // return redirect('/home');
                    return redirect()->route('home');
                }
            }
        } else {
            return redirect()->route("auth.login", ["error" => "Invalid username or password"]);
            // return redirect("auth/login");
        }

        // echo $users;
        // first lay gia tri dau tien
        echo json_encode($user);
        // echo count($users);
        // get(); laays gias tri mang
    }
}
