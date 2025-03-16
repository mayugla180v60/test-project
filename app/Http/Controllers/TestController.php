<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function test() {
        $users = User::all();
        return view('test', compact('users')); //compact関数
        // return view('test', ['users'=> $users]); //配列
        // return view('test')-> with('users', $users); //with関数
    }
}
