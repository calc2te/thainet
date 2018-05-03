<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function register(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        // insert
        //$users = DB::select('select * from users where active = ?', [1]);
        $insert = DB::insert('insert into User (email, password) values (?, ?)', ['1', '2']);

        $response = array();
        $response['email'] = $email;
        $response['password'] = $password;

        echo json_encode($response);
    }

    public function login() {

    }
}
