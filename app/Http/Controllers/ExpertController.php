<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;

class ExpertController extends Controller
{
    public function all(){
        $experts = Expert::latest();
        return view ('services/allservices');
    }
}
