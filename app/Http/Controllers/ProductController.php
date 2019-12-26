<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Product_Image;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function get_create_product(Request $request)
    {
        $category = Category::all();
        return view('create_product', compact('category'));
    }

    public function post_create_product(Request $request)
    {
//        dd($request->amount);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->slug = slug($request->name);
        $product->describe = $request->describe;
        $product->information = $request->information;
        $save_product = $product->save();
//        $product_size = new Size();
        foreach ($request->amount as $size => $amount )
        {
//            if ($amount != NULL) {
                $product_size = new Size();
                $product_size->product_id = $product->id;
                $product_size->size = $size;
                $product_size->amount = ($amount != null) ? $amount : 0;
                $product_size->save();
//            }
        }

        foreach ($request->file('image') as $image) {
            $path = Storage::disk('public')->putFile("/images/" . rand(0, 10000) . $image->getClientOriginalName(), $image);
            $product_image = new Product_Image();
            $product_image->image = $path;
            $product_image->product_id = $product->id;
            $product_image->save();
        }

        if ($save_product) {
            return redirect()->route('product');
        } else {
            return 'Tao product that bai';
        }
    }

    public function product(Request $request)
    {
        $products = Product::with(['product_category'])->get();
//        $images = Product_Image::with(['image_product'])->get();
        return view('product', compact('products'));
    }

    public function get_edit_product(Request $request)
    {
        $id = $request->id;
        $category = Category::all();
        $product = Product::with(['product_category','product_image','size'])->find($id);
        $product_category = $product->product_category->id;
        return view('edit_product', compact('product','product_category','category'));
    }

    public function post_edit_product(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->slug = slug($request->name);
        $product->describe = $request->describe;
        $product->information = $request->information;
        if ($request->file('image') != null) {
            foreach ($request->file('image') as $image) {
                $path = Storage::disk('public')->putFile("/images/" . rand(0, 10000) . $image->getClientOriginalName(), $image);
                $product_image = new Product_Image();
                $product_image->image = $path;
                $product_image->product_id = $product->id;
                $product_image->save();
            }
        }
        $product->save();
        return redirect()->route('product');
    }

    public function delete_product(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product');
    }
}
