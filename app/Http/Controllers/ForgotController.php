<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use RobinCSamuel\LaravelMsg91\Facades\LaravelMsg91;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;

class ForgotController extends Controller
{

   
   use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function randomPass()
    {
        $verifyPassword = rand(100000, 999999);
        $this->variable = $verifyPassword;
    }
    
    public function showResend()
    {
        return view('auth/passwords/email');
    }
   
    public function create(Request $request)
    {   
        $this->randomPass();
        
        $mobile =$request->input('mobile_no');
       
            DB::table('users')
                    ->where("mobile_no", '=', $mobile)
                            ->update(['password'=> Hash::make($this->variable)]); 
                                 $this->sendOtp($mobile);


    }
    public function sendOtp($mobile_no)
    {   
        
        $result = LaravelMsg91::sendOtp($mobile_no,$this->variable,"Your login password is $this->variable .");
        echo "Go back and try login with new password";

    }

}
