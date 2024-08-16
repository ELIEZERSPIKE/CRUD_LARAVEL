<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        $users =  User::all();
        return view('dasboard', compact('users'));
    }
}
