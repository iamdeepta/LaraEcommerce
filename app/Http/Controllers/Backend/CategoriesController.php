<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;    //to access AdminController.php
use App\Models\Category;
use Image;  //intervention image class

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.categories.index', compact('categories'));    // compact works like ->with('..', ..);
    }

    public function create(){
        $main_categories = Category::orderBy('name', 'desc')->where('parent_id', NULL)->get();
        return view('backend.pages.categories.create', compact('main_categories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'image' => 'nullable|image',    //only take image file
        ],
            [
                'name.required' => 'Please provide a category name!',
                'image.image' => 'Please provide a valid image!',
            ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;

        //insert image
        if ($request->hasFile('image')){
                    //insert that image
                    $image = $request->file('image');
                    $img = time(). '.' . $image->getClientOriginalExtension();
                    $location = public_path('images/categories/' .$img);
                    Image::make($image)->save($location);
                    $category->image = $img;

        }

        $category->save();

        session()->flash('success', 'A new category has been added successfully!');
        return redirect()->route('backend.categories');
    }
}
