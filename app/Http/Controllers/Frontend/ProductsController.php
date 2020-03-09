<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;    //as ProductsController class is extending AdminController

class ProductsController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc')->get();   //here Product is a model and fetching(get) in a descending order
        return view('frontend.pages.product.index')->with('products', $products);   //we want to get products on that page with name products
    }

    public function show($slug){
        //
    }
}
