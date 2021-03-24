<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){

        return view('pages.index');
    }

    public function contact(){

        return view('pages.contact');
    }

    public function products(){

        $products = Product::orderby('id', 'desc')->get();

        return view('pages.product.index')->with('products', $products);
    }
}
