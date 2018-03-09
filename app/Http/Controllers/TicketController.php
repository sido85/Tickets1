<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tickets;
use Auth;
use Session;


class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Isadmin')->only('consulter');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $priorites=DB::table('Priorites')->pluck('nom','id');
        return view('ticket.create', compact('priorites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  //dd($request);
        $data=$request->all();
        $this->validate($request,[
           'message'=>'required|min:10',
            'priorites_id'=>'required',
        ]);
        $data=array_add($data,'users_id',Auth::user()->id);
        //dd($data);
        Tickets::create($data);
        Session::flash('message','Votre ticket a été crée avec succés');
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public  function consulter($id){
        $ticket=Tickets::findOrFail($id);
        $ticket->etat='en cours';
        $ticket->save();

        return view('ticket.show',compact('ticket'));
    }
}
