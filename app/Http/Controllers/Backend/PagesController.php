<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;    //to access AdminController.php

use App\Models\ProductImage;

use App\Models\Product;

use Image;

class PagesController extends Controller
{
    public function index(){
        return view('backend.pages.index');
    }

}
