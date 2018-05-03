<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoungeController extends Controller
{
    public function list() {
        return view('lounge/list');
    }
}
