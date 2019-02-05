<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\EmpData;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{    
    public function register()
    {
        return view('pages/register');
    }
    public function addUserData(request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|Email',
            'password' => 'required',
            ]);
        $input                  = $request->all();
        $userCount              = Users::where('email',$input['email'])->count();
        if($userCount>=1)
        {
            return redirect('register')->with('error','User already exsist!');
        }
        if($userCount==0)
        {
            $users              = new Users;
            $users->name        = $input['name'];
            $users->email       = $input['email'];
            $users->password    = Hash::make($input['password']);
            $users->save();
            return redirect()->route('display-login-page')->with('success','User created successfully!');
        }      
    }
    public function login()
    {
        return view('pages/login');
    }
    public function doLogin(request $request)
    {
        $this->validate($request,[
        'email' => 'required',
        'password' => 'required'
        ]);
        $input      = $request->all();
        $userdata = array(
        'email'     => $input['email'],
        'password'  => $input['password']
        );
        if (Auth::attempt($userdata)) {
            return redirect()->route('display-dashboard');    
        } 
        return redirect()->route('display-login-page')->with('error','There is some error! Please try again');
     }
    public function mainDashboard(request $request)
    {
        return view('/dashboard');
    }    
    public function empdData()
    {
      $empData = EmpData::get();
      dd($empData);
    }
    public  function checkRollbar()
    {
        $display = "naval";
        return $display;
    }

}
