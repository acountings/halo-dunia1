<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Regency;


class IndoRegionController extends Controller
{
     public function form()
     {
        $regencies = Regency::all();
        return view('Auth.register',compact('regencies'));
     }
}
