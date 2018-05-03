<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreListController extends Controller
{
    public function location($get_location = '') {
        $locations = DB::table('info_location')
            ->get();

        $data = array();
        $data['get_location'] = $get_location;
        $data['locations'] = $locations;

        return view('list/location', $data);
    }

    public function rank() {

    }
}
