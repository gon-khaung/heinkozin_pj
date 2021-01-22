<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CafeModel;
class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function cart(){
        return view('frontend.cart');
    }
    public function form(){
        return view('frontend.form');
    }
    public function feedback(){
        return view('frontend.feedback');
    }
    public function home(){
        $data = CafeModel::all();
        return view('frontend.home')->with('data', $data);
    }
}
