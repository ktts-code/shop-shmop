<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Image;
use App\Models\Price;
use App\Models\Product;
use App\Models\Tag;



class CategoryController extends Controller
{

  public function create()
  {
    return view('admin.categories.form');
    
  }

  public function store(Request $request )
  { 
    $new_category = $request->category_name;
    Category::create([
      'name'=>$new_category
    ]);
        
    return view('admin.categories.add_success')->with('my_new_category',$new_category);
  }




}
