<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index(){
        return view('front.cart.index');
    }

    public function cart(Request $request){
        $id = $request->id;
        $name = $request->name;
        $price = (int)$request->price;   

        Cart::add($id,$name, 1,$price,0, ['size' => 'large'])->associate('App\Productasdfsd');
        
        //session
        session()->flash('msg', 'your item has been added to cart');
        return redirect('/categories');
    }
    public function destroy(Request $request, $id){
        Cart::remove($id);

        return redirect()->back()->with('msg','item removed');
    }
}
