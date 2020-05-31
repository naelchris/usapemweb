<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\Order;
use App\OrderItems;
use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon;
use App\History;


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
        //find product
        $product = Product::find($request->id);
        //add cart
        $id = $request->id;
        $name = $request->name;
        $price = (int)$request->price;   
        $qty = (int)$request->qty;

        if($qty > $product->stock){
            //session
            session()->flash('warning','The quantity out limit the product stock');
            return redirect('/categories');
        }


        Cart::add($id,$name, $qty,$price,0, ['size' => 'large'])->associate('App\Productasdfsd');
        
        //session
        session()->flash('msg', 'Your item has been added to the cart');
        return redirect('/categories');
    }
    public function destroy(Request $request, $id){
        Cart::remove($id);

        return redirect()->back()->with('msg','item removed');
    }

    public function order(){
        //insert in to Order
        $order = new Order;
        $order->user_id = Auth::guard('user')->user()->id;
        $order->date = Carbon::now();
        $order->address = Auth::guard('user')->user()->address;
        $order->status = 1;
        $order->save();


        //insert in to Order items
        foreach(Cart::instance('default')->content() as $item){
            //insert order items
            OrderItems::create([
                'order_id'=>$order->id,
                'product_id'=>$item->model->id,
                'quantity'=> $item->qty,
                'price'=>$item->price
            ]);

            //find product
            $product = Product::find($item->model->id);
            $curr = $product->stock;
            $curr = $curr - $item->qty;
            //update qty product
            $product->update([
                'stock'=>$curr
            ]);
            

            //adding to history
            $history = new History;
            $history->user_id = Auth::guard('user')->user()->id;
            $history->product_id = $item->model->id;
            $history->product_name = $item->model->name;
            $history->quantity = $item->qty; 
            $history->category = $item->model->category;
            $history->price = $item->price*$item->qty;
            $history->image = $item->model->image;
            $history->save();
        }
        //session
        session()->flash('msg','Your purchase is successful');

        //destroy all cart
        Cart::instance('default')->destroy();

        
        //redirect
        return redirect('/');
    }
}
