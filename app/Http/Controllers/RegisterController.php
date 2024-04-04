<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   public function index()
   {
    return view('register',
    [
        'title'=>'register',
    ]);
   }

   public function store(Request $request)
   {
    
      $validateData = $request->validate([
        'name'=>'required|max:255',
        'username'=>['required','min:3','max:255','unique:users'],
        'email'=>'required|email:dns|unique:users',
        'password'=>'required|min:5|max:255',
        'jabatan'=> 'required|in:1,2,3,4,',
        'kota'=> 'required|not_in:0',
        'institusi'=>'required','min:3','max:255',
        'wa'=>'required','min:3','max:255'
      ]);

      // $validateData['password'] = bcrypt($validateData['password']);


      $validateData['password'] = Hash::make($validateData['password']);

     User::create($validateData);

     return redirect('login');
   }
}
