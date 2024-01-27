<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::get();
    $categories = Category::get();
    $selected_cat = [];

    return view("product.index", compact("products", "categories", "selected_cat"));
  }

  public function add()
  {
    $categories = Category::get();
    $selected_cat = [];

    
    return view("product.add",compact("categories", "selected_cat"));
  }
}
