<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
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

    public function product_store(Request $request){

        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        
        $product->category_id = 1;
        $product->brand_id = 1;
        $product->admin_id = 1;
        $product->slug = 'washableproduct';
        $product->offer_price = 8000;
        
        $product->save();

        // //ProductImage Model Insert image

        // if($request->hasfile('product_image')){
        //    //insert Images
        //    $image = $request->file('product_image');
        //    $img_name = time(). '.'. $image->getClientOriginalExtension();
        //    $location = public_path('images/product/'.$img_name);
        //    $image->move($location, $img_name);

        //    //to store image to database
        //   $Product_image = new ProductImage;
        //   $Product_image->product_id->$product->id;
        //   $Product_image->image->img_name;
        //   $Product_image->save();
        // }


        // ProductImage Model insert image

        if ($request->hasFile('product_image')) {
          //insert that image
          $image = $request->file('product_image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/products/' .$img);
        //   Image::make($image)->save($location);
        $image->move($location, $img);
        
          $product_image = new ProductImage;
          $product_image->product_id = $product->id;
          $product_image->image = $img;
          $product_image->save();
        }
        // if (count($request->product_image) > 0) {
        //     foreach ($request->product_image as $image) {

        //         //insert that image
        //         //$image = $request->file('product_image');
        //         $img = time() . '.'. $image->getClientOriginalExtension();
        //         $location = public_path('images/products/' .$img);
        //         Image::make($image)->save($location);

        //         $product_image = new ProductImage;
        //         $product_image->product_id = $product->id;
        //         $product_image->image = $img;
        //         $product_image->save();

        //     }
        // }

        // return redirect()->route('admin.product.create');

        return redirect()->route('admin.product.create');
    }
}

// if ($request->hasFile('file')) {
//     $image = $request->file('file');
//     $name = time().'.'.$image->getClientOriginalExtension();
//     $destinationPath = public_path('/images/');
//     $image->move($destinationPath, $name);
//     $product->image = $name;
// }