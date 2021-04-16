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
        $ambulance = Ambulance::orderBy('duedate', 'asc')->get();
        if(auth()->user()->role == User::ADMIN){
            return view('Admin' , ['users' => $users , 'ambulance' => $ambulance]);
        }
        return view('Member' , ['users' => $users , 'ambulance' => $ambulance]);
    }

    public function create(){
        $users = User::all();
        return view ('createambulance' , ['users' => $users]);
    }

    public function store(Request $request){
        $ambulance = new Ambulance();

        $ambulance->name = $request->name;
        $ambulance->ambname = $request->ambname;
        $ambulance->problem = $request->problem;
        $ambulance->status = $request->status;
        $ambulance->KM = $request->KM;
        $ambulance->rebhan = $request->rebhan;
        $ambulance->Description = $request->Description;
        $ambulance->duedate = $request->date;
        $ambulance->created_at = NOW();

        $ambulance->save();

        return redirect('/');
    }


    public function edit($id){
        $users = User::all();
        $ambulance = Ambulance::find($id);
        return view ('editambulance' , ['ambulance' => $ambulance , 'users' => $users]);
    }

    public function update(Request $request , $id){
        $ambulance = Ambulance::find($id);

        $ambulance->name = $request->name;
        if($request->name == "--Select--"){
            $ambulance->name = 'Not Specified';
        }
        $ambulance->ambname = $request->ambname;
        $ambulance->problem = $request->problem;
        $ambulance->status = $request->status;
        $ambulance->KM = $request->KM;
        $ambulance->rebhan = $request->rebhan;
        $ambulance->Description = $request->Description;
        $ambulance->duedate = $request->date;

        $ambulance->save();

        return redirect('/');
    }
}
