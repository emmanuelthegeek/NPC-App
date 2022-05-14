<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\Lga;
use App\Models\Ward;
use App\Models\Citizen;

class Npc extends Controller
{
    public function __construct()
    { 
        $this->middleware('auth'); 
    }

    //Number of users 
    public function number_of_users(){
        $id   =   auth()->user()->id;
        $users = User::where('id',$id)->count();
        echo $users;
    }

    public function number_of_citizens(){
        $id   =   auth()->user()->id;
        $users = User::where('id',$id)->count();
        echo $users;
    }

    public function number_of_states(){
        $id   =   auth()->user()->id;
        $users = User::where('id',$id)->count();
        echo $users;
    }

    public function number_of_lgas(){
        $id   =   auth()->user()->id;
        $users = User::where('id',$id)->count();
        echo $users;
    }
    
}
