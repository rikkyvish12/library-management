<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'students' => Student::count(),
        ]);
    }

    // public function change_password_view()
    // {
    //     return view('reset_password');
    // }

    // public function change_password(changePasswordRequest $request)
    // {
    //     if (Auth::check(["username" => auth()->user()->username, "password" => $request->c_password])) {
    //         auth()->user()->password = bcrypt($request->password);
    //         return redirect()->back()->with(['message' => "Password Changed Successfully!."]);
    //     } else {
    //         return "";
    //     }
    // }
}
