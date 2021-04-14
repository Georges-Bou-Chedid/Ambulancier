<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambulance;
use App\Models\User;
use Auth;


class AmbulanceController extends Controller
{
    public function all(){
        $users = User::all();
        $ambulance = Ambulance::all();
        if(auth()->user()->role == User::ADMIN){
            return view('Admin' , ['users' => $users , 'ambulance' => $ambulance]);
        }
        return view('Member' , ['users' => $users , 'ambulance' => $ambulance]);
    }

    public function create(){
        return view ('createambulance');
    }

    public function store(Request $request){
        $ambulance = new Ambulance();

        $ambulance->name = $request->name;
        $ambulance->ambname = $request->ambname;
        $ambulance->problem = $request->problem;
        $ambulance->status = $request->status;
        
        $ambulance->Description = $request->Description;
        $ambulance->duedate = $request->date;
        $ambulance->created_at = NOW();

        $ambulance->save();

        return redirect('/');
    }


    public function edit($id){
        $ambulance = Ambulance::find($id);
        return view ('editambulance' , ['ambulance' => $ambulance]);
    }

    public function update(Request $request , $id){
        $ambulance = Ambulance::find($id);

        $ambulance->name = $request->name;
        $ambulance->ambname = $request->ambname;
        $ambulance->problem = $request->problem;
        $ambulance->status = $request->status;
        
        $ambulance->Description = $request->Description;
        $ambulance->duedate = $request->date;

        $ambulance->save();

        return redirect('/');
    }
}
