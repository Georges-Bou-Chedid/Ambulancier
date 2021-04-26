<?php

namespace App\Http\Controllers;

use App\Models\Akal;
use Illuminate\Http\Request;
use App\Models\Ambulance;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Models\Term;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;


class AmbulanceController extends Controller
{
    public function all(){
        $users = User::all();
        $ambulance = Ambulance::orderBy('duedate', 'asc')->get();
        $ambulance1 = Ambulance::where('duedate', '<', Carbon::now()->toDateString())->get();

        $akal = Akal::all();

        if(auth()->user()->role == User::ADMIN){
            return view('Admin' , ['users' => $users , 'ambulance' => $ambulance , 'ambulance1' => $ambulance1 , 'akal' => $akal]);
        }
        return view('Member' , ['users' => $users , 'ambulance' => $ambulance , 'ambulance1' => $ambulance1 , 'akal' => $akal]);
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

               $path = $request->file->store('assets');

               $path2 = $request->file2->store('assets');

                $ambulance->name = $request->name;
                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->img = $path;
                $ambulance->img2 = $path2;
                $ambulance->save();
            } else {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

               $path = $request->file->store('assets');

                $ambulance->name = $request->name;
                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->img = $path;
                $ambulance->created_at = NOW();
                $ambulance->save();
            }
        }

        else if ($request->hasFile('file2')) {
            if ($request->hasFile('file1')) {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                    'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $path = $request->file->store('assets');

               $path2 = $request->file2->store('assets');

                $ambulance->name = $request->name;
                $ambulance->ambname = $request->ambname;
                $ambulance->problem = $request->problem;
                $ambulance->status = $request->status;
                $ambulance->KM = $request->KM;
                $ambulance->rebhan = $request->rebhan;
                $ambulance->Description = $request->Description;
                $ambulance->duedate = $request->date;
                $ambulance->img = $path;
                $ambulance->img2 = $path2;
                $ambulance->save();
        }

        else{
            $validated = $request->validate([
                'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $path2 = $request->file2->store('assets');

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
            $ambulance->img2 = $path2;
            $ambulance->save();
        }
        }

        else{

            $ambulance->name = $request->name;
            $ambulance->ambname = $request->ambname;
            $ambulance->problem = $request->problem;
            $ambulance->status = $request->status;
            $ambulance->KM = $request->KM;
            $ambulance->approved = false;
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
        $users1 = User::where('name' , $ambulance->name)->first();
        return view ('editambulance' , ['ambulance' => $ambulance , 'users' => $users , 'users1' => $users1]);
    }

    public function update(Request $request , $id){
        $ambulance = Ambulance::find($id);

        if ($request->hasFile('file')) {
            if ($request->hasFile('file2')) {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                    'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $filePath = public_path('storage/'.$ambulance->img);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }

                $filePath = public_path('storage/'.$ambulance->img2);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }

                $path = $request->file->store('assets');

               $path2 = $request->file2->store('assets');

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
                $ambulance->img = $path;
                $ambulance->img2 = $path2;
                $ambulance->save();
            } else {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $filePath = public_path('storage/'.$ambulance->img);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }

                $path = $request->file->store('assets');

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
                $ambulance->img = $path;
                $ambulance->save();
            }
        }

        else if ($request->hasFile('file2')) {
            if ($request->hasFile('file1')) {
                $validated = $request->validate([
                    'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                    'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $filePath = public_path('storage/'.$ambulance->img);
                 if(File::exists($filePath)) {
                 File::delete($filePath);
             }

                $filePath = public_path('storage/'.$ambulance->img2);
                 if(File::exists($filePath)) {
                File::delete($filePath);
                 }

                 $path = $request->file->store('assets');

                 $path2 = $request->file2->store('assets');

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
                $ambulance->img = $path;
                $ambulance->img2 = $path2;
                $ambulance->save();
        }

        else{
            $validated = $request->validate([
                'file2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $filePath = public_path('storage/'.$ambulance->img2);
            if(File::exists($filePath)) {
            File::delete($filePath);
            }

            $path2 = $request->file2->store('assets');

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
            $ambulance->img2 = $path2;
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

        $ambulance1 = Ambulance::where('duedate', '<', Carbon::now()->toDateString())->get();
        $akal = Akal::all();

        if (count($ambulance) > 0) {
            if (User::ADMIN == auth()->user()->role) {
                return view('Admin', ['ambulance' => $ambulance , 'ambulance1' => $ambulance1 , 'akal' => $akal])->withdetails($ambulance)->withQuery($t);
            }

            return view('Member', ['ambulance' => $ambulance , 'ambulance1' => $ambulance1 , 'akal' => $akal])->withdetails($ambulance)->withQuery($t);
        }
     else return redirect('/allrequests')->with('message' , 'No Details found. Try to search again !');

        }

        public function approved(Request $request , $id) {
            $ambulance = Ambulance::find($id);

            if($ambulance->approved == false){
                $ambulance->approved = true;
                $ambulance->save();
                return redirect()->back();
            }
                $ambulance->approved = false;
                $ambulance->save();
                return redirect()->back();
        }


        public function addtouw2ifet(Request $request){

            $akal = new Akal();

            $akal->name = $request->name;
            $akal->from = $request->date1;
            $akal->to = $request->date2;

            $akal->save();

            return redirect()->back();
        }

        public function savetouw2ifet (Request $request , $id){
            $akal = Akal::find($id);

            $akal->name = $request->name;
            $akal->from = $request->date1;
            $akal->to = $request->date2;

            $akal->save();
            return redirect()->back();
        }

        public function deletetouw2ifet (Request $request , $id){
            $akal = Akal::find($id);

            $akal->delete();

            return redirect()->back();
        }


















        public function image($id){
            $ambulance = Ambulance::find($id);
            return view('imageview' , ['ambulance' => $ambulance]);

        }

        public function deletepic1($id){
            $ambulance = Ambulance::find($id);

            $filePath = public_path('storage/'.$ambulance->img);
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

            $filePath = public_path('storage/'.$ambulance->img2);
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

            $filePath = public_path('storage/'.$ambulance->img);
            if(File::exists($filePath)) {
                File::delete($filePath);
            }

            $filePath = public_path('storage/'.$ambulance->img2);
            if(File::exists($filePath)) {
                File::delete($filePath);
            }

            $ambulance->delete();

            return redirect('/allrequests');
        }
}
