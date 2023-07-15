<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //Metodo select all  -  find
        // $users = User::all(); 
        
        // $users = User::where('name','!=','Ruiz')->limit(10,2)->get();
        
        $users = User::find(1);
        // $users = User::where('name','!=','Ruiz')->orWhere    ('email','info@mail.com')->orderBy('email','asc')->limit(10,2)->get();

        return view('index',compact('users'));
    }

    public function create(){
        // $newUser = new User;
        // $newUser->name='Juan';
        // $newUser->email='juan@mail.com';
        // $newUser->password=Hash::make('123456789');
        // $newUser->save();

        User::create([
            "name"=>"ana",
            "email"=>"ana@mail.com",
            "password"=>'123456789'
        ]);
        User::create([
            "name"=>"pedro",
            "email"=>"pedro@mail.com",
            "password"=>'123456789'
        ]);

        return redirect()->route('index');
        
    }
}
