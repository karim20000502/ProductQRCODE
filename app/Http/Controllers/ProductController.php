<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('index',compact('products'));
    }

    public function create(){
        return view("create");
    }

    public function store(Request $request){
        $number = mt_rand(1000000000,9999999999);
        $request['product_code']=$number;
        if($this->productCodeExists($number)){
            $number = mt_rand(1000000000,9999999999);
        }
        Product::create($request->all());
            
        return redirect('/');


    }
    public function productCodeExists($number){
        return Product::whereProductCode($number)->exists();
    }
}
