<?php

namespace App\Http\Controllers;

use App\Models\Appelet;
use Illuminate\Http\Request;


class AppeletController extends Controller
{
    public function all(){
        $appelets = Appelet::where('id' , 1)->first();
        return view('appelet' , ['appelets'=>$appelets]);
    }

    public function update(Request $request , $id){
        $appelet = Appelet::find($id);
        $appelet->first = $request->first;
        if($request->first == "--Select--"){
            $appelet->first = '---';
        }

        $appelet->second = $request->second;
        if($request->second == "--Select--"){
            $appelet->second = '---';
        }

        $appelet->third = $request->third;
        if($request->third == "--Select--"){
            $appelet->third = '---';
        }

        $appelet->fourth = $request->fourth;
        if($request->fourth == "--Select--"){
            $appelet->fourth = '---';
        }

        $appelet->firstadv = $request->firstadv;
        if($request->firstadv == "--Select--"){
            $appelet->firstadv = '---';
        }

        $appelet->secondadv = $request->secondadv;
        if($request->secondadv =="--Select--"){
            $appelet->secondadv = '---';
        }

        $appelet->firstmission = $request->firstmission;
        if($request->firstmission == "--Select--"){
            $appelet->firstmission = '---';
        }

        $appelet->secondmission = $request->secondmission;
        if($request->secondmission == "--Select--"){
            $appelet->secondmission = '---';
        }
        
        $appelet->save();

        return redirect('/');
    }
}
