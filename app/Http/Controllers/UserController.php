<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController
{
    public function index (Request $request) {
        $params = $request->all();
        $users = DB::table('users')->where('name', 'LIKE', 'admin%')->orderBy('name', 'desc')->get();
//        $user = ['username' => 'admin', 'password' => '123456'];
        return view('test', compact('users'));
    }
}
