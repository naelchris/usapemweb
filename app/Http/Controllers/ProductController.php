<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function index(){

    }
    public function create(){
        return view('admin.products.create'); 
    }
    public function store(Request $request ){
        //logic untuk form
        
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'image|required'
        ]);
        
        

        //load image
         if($request->hasFile('image')){
             
            $image = $request->image;
            $name = $image->getClientOriginalName();
            //  $image->move('uploads',$image->getClientOriginalName());
            $request->file('image')->move('uploads',$name);
        }
        //save the data
        // Product::create([
        //     'name'=>$request->name,
        //     'price'=>$request->price,
        //     'description'=>$request->description,
        //     'image'=>$name   
        // ]); 
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $name;

        $product->save();


        //session 

        //redirect 
        return redirect('products/create');
    }
   
}
