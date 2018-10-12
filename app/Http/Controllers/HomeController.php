<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
   
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->where('id',Auth::id())->first();
       
        if($user->visit == 0)
        {
        return view('uploads');
        }
           else
           {
            return view('invoice');
           }
    }
    public function newindex()
    {
        return view('uploads');
    }
}
