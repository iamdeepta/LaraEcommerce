<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;    //to access AdminController.php
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.categories.index', compact('categories'));    // compact works like ->with('..', ..);
    }
}
