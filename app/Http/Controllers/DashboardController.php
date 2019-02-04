<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function dashboard()
    {
        $userData       = Users::get();
        $lgoinUserData  = Auth::user();
        //print_R($lgoinUserData);

       // dd();
        return view('dashboard/dashboard',compact('userData'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('display-login-page');
    }
}
