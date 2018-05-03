<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function list()
    {
        $stores = DB::table('store')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin/store/list', ['stores' => $stores]);
    }

    public function add()
    {
        /**
         * name
         * address
         * main image
         * image list (anotehr table)
         * comment list (another table)
         * date
         */
        return view('admin/store/add');
    }
}
