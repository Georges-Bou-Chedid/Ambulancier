<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambulance;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Models\Term;


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

    public function search(Request $request){

        $validated = $request->validate([
            'term' => 'required',
        ]);

        $t = $request->input('term');
        $ambulance = Ambulance::where('name' , 'like' , '%'.$t.'%')->orWhere('ambname' , 'like' , '%'.$t.'%')->get();

        if (count($ambulance) > 0) {
            if (User::ADMIN == auth()->user()->role) {
                return view('Admin', ['ambulance' => $ambulance])->withdetails($ambulance)->withQuery($t);
            }

            return view('Member', ['ambulance' => $ambulance])->withdetails($ambulance)->withQuery($t);
        }
     else return redirect('/allrequests')->with('message' , 'No Details found. Try to search again !');
       
        }
}
