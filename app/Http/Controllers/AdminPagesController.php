<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    //
    public function index(){

        return view('admin.pages.index');
    }

    public function product_create(){

        return view('admin.pages.product.create');
    }
}
