<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;

class StoreController extends Controller
{
    public function register(Request $request) {
        $name = $request->name;
        $addr = $request->addr;
        $price = $request->price;
        $back_image = $request->backImage;
        $detail_image = $request->detailImage;

        // save the image
        try {
            $back_image_name = $this->uploadImage($back_image);
            $detail_image_name = $this->uploadImage($detail_image);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        // insert table
        DB::table('store')->insert(
            ['name' => $name, 'addr' => $addr, 'price' => $price, 'back_image' => $back_image_name, 'detail_image' => $detail_image_name]
        );
    }

    /**
     * axios로 넘어온 이미지 저장하기
     */
    private function uploadImage($image) {
        $filename = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];

        $path = public_path('uploads/store/' . $filename);
        Image::make($image)->save($path);

        return $filename;
    }
}
