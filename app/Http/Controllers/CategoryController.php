<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get_create_category()
    {
        return view('create_category');
    }

    public function post_create_category(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = slug($request->name);
        if ($category->save()) {
            return redirect()->route('category');
        } else {
            return 'Tao category that bai';
        }
    }

    public function category(Request $request)
    {
        $category = Category::all();
        $product = Product::with('product_category')->get();
        return view('category', compact('category','product'));
    }

    public function get_edit_category(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        return view('edit_category', ['category' => $category]);
    }

    public function post_edit_category(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = slug($request->name);
        $category->save();
        return redirect()->route('category');
    }

    public function delete_category(Request $request)
    {
        $id = $request->id;
        $category = Category::with('category_product')->find($id);
        dd($category);
        $category->delete();
        return redirect()->route('category');
    }
}
