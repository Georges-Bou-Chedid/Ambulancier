<?php

namespace App\Http\Controllers;

use App\Models\Expert;

class ExpertController extends Controller
{
    public function all()
    {
        $experts = Expert::latest();

        return view('services/allservices');
    }
}
