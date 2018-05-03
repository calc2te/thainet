<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index() {
        $stores = DB::table('store')
            ->orderBy('id', 'desc')
            ->get();

        return view('landing', ['stores' => $stores]);
    }
}
