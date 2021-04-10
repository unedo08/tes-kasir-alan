<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('Products.index', compact(['products']));
    }

    public function add(){
        return view('Products.create',compact([]));
    }

    public function save(Request $request){
        Product::create ($request->all());
        return redirect('/');
    }
}
