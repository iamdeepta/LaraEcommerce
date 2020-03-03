<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;    //this is for using product model

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function products(){
        $products = Product::orderBy('id', 'desc')->get();   //here Product is a model and fetching(get) in a descending order
        return view('pages.product.index')->with('products', $products);   //we want to get products on that page with name products
    }

}
