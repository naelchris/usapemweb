<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CategoriesController extends Controller
{
    public function index(){
        $product = product::all();
        return view('front.categories.index',['product'=>$product]);
    }
}
