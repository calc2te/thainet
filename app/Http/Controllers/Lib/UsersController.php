<?php

namespace App\Http\Controllers\Lib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function register(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $response = array();
        $response['email'] = $email;
        $response['password'] = $password;

        echo json_encode($response);
    }

    public function login() {

    }
}
