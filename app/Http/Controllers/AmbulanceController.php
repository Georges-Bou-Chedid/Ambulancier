<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambulance;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Models\Term;
use Illuminate\Support\Facades\File;


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

        if ($request->hasFile('file')) {
            if ($request->hasFile('file2')) {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                    'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $image = $request->file('file');
                $new_name = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('assets/images'), $new_name);

                $image2 = $request->file('file2');
                $new_name2 = rand().'.'.$image2->getClientOriginalExtension();
                $image2->move(public_path('assets/images'), $new_name2);

                $ambulance->name = $request->name;
                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->img = $new_name;
                $ambulance->img2 = $new_name2;
                $ambulance->save();
            } else {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $image = $request->file('file');
                $new_name = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('assets/images'), $new_name);

                $ambulance->name = $request->name;
                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->created_at = NOW();
                $ambulance->img = $new_name;
                $ambulance->save();
            }
        }

        else if ($request->hasFile('file2')) {
            if ($request->hasFile('file1')) {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                    'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $image = $request->file('file');
                $new_name = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('assets/images'), $new_name);

                $image2 = $request->file('file2');
                $new_name2 = rand().'.'.$image2->getClientOriginalExtension();
                $image2->move(public_path('assets/images'), $new_name2);

                $ambulance->name = $request->name;
                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->img = $new_name;
                $ambulance->img2 = $new_name2;
                $ambulance->save();
        }

        else{
            $validated = $request->validate([
                'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $image = $request->file('file2');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $new_name);

            $ambulance->name = $request->name;
            if ('--Select--' == $request->name) {
                $ambulance->name = 'Not Specified';
            }
            $ambulance->ambname = $request->ambname;
            $ambulance->problem = $request->problem;
            $ambulance->status = $request->status;
            $ambulance->KM = $request->KM;
            $ambulance->rebhan = $request->rebhan;
            $ambulance->Description = $request->Description;
            $ambulance->duedate = $request->date;
            $ambulance->created_at = NOW();
            $ambulance->img2 = $new_name;
            $ambulance->save();
        }
        }

        else{

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
        }
        return redirect('/allrequests')->with('edited' , 'Request Added Successfuly');
    }


    public function edit($id){
        $users = User::all();
        $ambulance = Ambulance::find($id);
        return view ('editambulance' , ['ambulance' => $ambulance , 'users' => $users]);
    }

    public function update(Request $request , $id){
        $ambulance = Ambulance::find($id);

        if ($request->hasFile('file')) {
            if ($request->hasFile('file2')) {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                    'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $filePath = public_path('assets/images/'.$ambulance->img);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }

                $filePath = public_path('assets/images/'.$ambulance->img2);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }

                $image = $request->file('file');
                $new_name = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('assets/images'), $new_name);

                $image2 = $request->file('file2');
                $new_name2 = rand().'.'.$image2->getClientOriginalExtension();
                $image2->move(public_path('assets/images'), $new_name2);

                $ambulance->name = $request->name;
                if ('--Select--' == $request->name) {
                    $ambulance->name = 'Not Specified';
                }

                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->img = $new_name;
                $ambulance->img2 = $new_name2;
                $ambulance->save();
            } else {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $filePath = public_path('assets/images/'.$ambulance->img);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }

                $image = $request->file('file');
                $new_name = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('assets/images'), $new_name);

                $ambulance->name = $request->name;
                if ('--Select--' == $request->name) {
                    $ambulance->name = 'Not Specified';
                }
                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->created_at = NOW();
                $ambulance->img = $new_name;
                $ambulance->save();
            }
        }

        else if ($request->hasFile('file2')) {
            if ($request->hasFile('file1')) {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                    'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $filePath = public_path('assets/images/'.$ambulance->img);
                 if(File::exists($filePath)) {
                 File::delete($filePath);
             }

                $filePath = public_path('assets/images/'.$ambulance->img2);
                 if(File::exists($filePath)) {
                File::delete($filePath);
                 }

                $image = $request->file('file');
                $new_name = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('assets/images'), $new_name);

                $image2 = $request->file('file2');
                $new_name2 = rand().'.'.$image2->getClientOriginalExtension();
                $image2->move(public_path('assets/images'), $new_name2);

                $ambulance->name = $request->name;
                if ('--Select--' == $request->name) {
                    $ambulance->name = 'Not Specified';
                }

                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->img = $new_name;
                $ambulance->img2 = $new_name2;
                $ambulance->save();
        }

        else{
            $validated = $request->validate([
                'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $filePath = public_path('assets/images/'.$ambulance->img2);
            if(File::exists($filePath)) {
            File::delete($filePath);
            }

            $image = $request->file('file2');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $new_name);

            $ambulance->name = $request->name;
            if ('--Select--' == $request->name) {
                $ambulance->name = 'Not Specified';
            }
            $ambulance->ambname = $request->ambname;
            $ambulance->problem = $request->problem;
            $ambulance->status = $request->status;
            $ambulance->KM = $request->KM;
            $ambulance->rebhan = $request->rebhan;
            $ambulance->Description = $request->Description;
            $ambulance->duedate = $request->date;
            $ambulance->created_at = NOW();
            $ambulance->img2 = $new_name;
            $ambulance->save();
        }
        }

        else{

            $ambulance->name = $request->name;
            if ('--Select--' == $request->name) {
                $ambulance->name = 'Not Specified';
            }
            $ambulance->ambname = $request->ambname;
            $ambulance->problem = $request->problem;
            $ambulance->status = $request->status;
            $ambulance->KM = $request->KM;
            $ambulance->rebhan = $request->rebhan;
            $ambulance->Description = $request->Description;
            $ambulance->duedate = $request->date;
            $ambulance->created_at = NOW();

            $ambulance->save();
        }
        return redirect('/allrequests')->with('edited' , 'Request Edited Successfuly');
    }

    public function search(Request $request){

        $validated = $request->validate([
            'term' => 'required',
        ]);

        $t = $request->input('term');
        $ambulance = Ambulance::where('name' , 'like' , '%'.$t.'%')->orWhere('ambname' , 'like' , '%'.$t.'%')
        ->orWhere('problem' , 'like' , '%'.$t.'%')->orWhere('status' , 'like' , '%'.$t.'%')->orWhere('created_at' , 'like' , '%'.$t.'%')
        ->orWhere('rebhan' , 'like' , '%'.$t.'%')->get();

        if (count($ambulance) > 0) {
            if (User::ADMIN == auth()->user()->role) {
                return view('Admin', ['ambulance' => $ambulance])->withdetails($ambulance)->withQuery($t);
            }

            return view('Member', ['ambulance' => $ambulance])->withdetails($ambulance)->withQuery($t);
        }
     else return redirect('/allrequests')->with('message' , 'No Details found. Try to search again !');

        }

        public function image($id){
            $ambulance = Ambulance::find($id);
            return view('imageview' , ['ambulance' => $ambulance]);

        }

        public function deletepic1($id){
            $ambulance = Ambulance::find($id);

            $filePath = public_path('assets/images/'.$ambulance->img);
            if(File::exists($filePath)) {
            File::delete($filePath);
            }

            if($ambulance->img == NULL){
                return redirect('edit/'.$ambulance->id)->with('deleted' , 'Pic 1 Not Found');
            }
            $ambulance->img = NULL;
            $ambulance->save();

            return redirect('edit/'.$ambulance->id)->with('deleted' , 'Pic 1 is Deleted');
        }
        public function deletepic2($id){
            $ambulance = Ambulance::find($id);

            $filePath = public_path('assets/images/'.$ambulance->img2);
            if(File::exists($filePath)) {
            File::delete($filePath);
            }

            if($ambulance->img2 == NULL){
                return redirect('edit/'.$ambulance->id)->with('deleted' , 'Pic 2 Not Found');
            }
            $ambulance->img2= NULL;
            $ambulance->save();

            return redirect('edit/'.$ambulance->id)->with('deleted' , 'Pic 2 is Deleted');
        }

        public function delete($id){
            $ambulance = Ambulance::find($id);

            $filePath = public_path('assets/images/'.$ambulance->img);
            if(File::exists($filePath)) {
                File::delete($filePath);
            }

            $filePath = public_path('assets/images/'.$ambulance->img2);
            if(File::exists($filePath)) {
                File::delete($filePath);
            }

            $ambulance->delete();

            return redirect('/allrequests');
        }
}
