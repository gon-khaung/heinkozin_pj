<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CafeModel;

class BackendController extends Controller
{
    //
    public function index(){
        return view('backend.admin');
    }

    public function create_item(Request $request){

        $name = $request->name;
        $price = $request->price;
        $photo = $request->file("photo");
        $photo_name = uniqid() . "_" . $photo->getClientOriginalName();
        $photo->move(public_path(). "/photos/items/", $photo_name);

        $data = new CafeModel;
        $data->name = $name;
        $data->price = $price;
        $data->photo = $photo_name;
        $data->save();
        return back();
    }
}
