<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use Illuminate\Http\Request;
use App\Models\Archived;
use App\Models\User;
use Auth;
use GrahamCampbell\ResultType\Success;
use ZipStream\Option\Archive;
use Illuminate\Support\Facades\File;


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
        $archived->img = $ambulance->img;
        $archived->img2 = $ambulance->img2;
        $archived->updated_at = NOW();

        $ambulance->delete();
        $archived->save();

        return redirect('/allrequests')->with('success2' , 'Archived Successfully');
    }

    public function delete($id){
        $archived = Archived::find($id);

        $filePath = public_path('assets/images/'.$archived->img); 
        if(File::exists($filePath)) {
        File::delete($filePath);
        }

        $filePath = public_path('assets/images/'.$archived->img2); 
        if(File::exists($filePath)) {
        File::delete($filePath);
        }

        $archived->delete();

        return redirect('/archive');   
    }

    public function search(Request $request){

        $validated = $request->validate([
            'term' => 'required',
        ]);

        $t = $request->input('term');
        $archived = Archived::where('name' , 'like' , '%'.$t.'%')->orWhere('ambname' , 'like' , '%'.$t.'%')
        ->orWhere('problem' , 'like' , '%'.$t.'%')->orWhere('status' , 'like' , '%'.$t.'%')->orWhere('created_at' , 'like' , '%'.$t.'%')
        ->orWhere('rebhan' , 'like' , '%'.$t.'%')->get();

        if (count($archived) > 0) {
            if (User::ADMIN == auth()->user()->role) {
                return view('AdminArchived', ['archived' => $archived])->withdetails($archived)->withQuery($t);
            }

            return view('MemberArchived', ['archived' => $archived])->withdetails($archived)->withQuery($t);
        }
     else return redirect('/archive')->with('message' , 'No Details found. Try to search again !');
       
        }

        public function image($id){
            $archived = Archived::find($id);
            return view('imagearchiveview' , ['archived' => $archived]);

        }
    
}
