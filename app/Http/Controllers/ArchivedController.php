<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use Illuminate\Http\Request;
use App\Models\Archived;
use App\Models\User;
use Auth;
use GrahamCampbell\ResultType\Success;

class ArchivedController extends Controller
{
    public function all()
    {
        $archived = Archived::orderBy('updated_at', 'asc')->get();;

        if (User::ADMIN == auth()->user()->role) {
            return view('AdminArchived', ['archived' => $archived]);
        }

        return view('MemberArchived', ['archived' => $archived]);
    }


    public function archive(Request $request , $id){
        $ambulance = Ambulance::find($id);
        $archived = new Archived();

        $archived->name = $ambulance->name;
        $archived->ambname = $ambulance->ambname;
        $archived->problem = $ambulance->problem;
        $archived->status = $ambulance->status;
        $archived->KM = $ambulance->KM;
        $archived->rebhan = $ambulance->rebhan;
        $archived->Description = $ambulance->Description;
        $archived->created_at = $ambulance->created_at;
        $archived->updated_at = NOW();

        $ambulance->delete();
        $archived->save();

        return redirect('/')->with('success' , 'Archived Successfully');
    }

    public function delete($id){
        $archived = Archived::find($id);
        $archived->delete();

        return redirect('/archive');   
    }
    
}
