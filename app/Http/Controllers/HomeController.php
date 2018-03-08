<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;
use Auth;
use Illuminate\Support\Facades\DB;

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
        if (Auth::user()->name=='admin'){
            $tickets=Tickets::paginate(10);

        }
        else{
            $tickets=Tickets::where('users_id',Auth::user()->id)->paginate(10);

        }

        return view('home',compact('tickets'));
    }
}
