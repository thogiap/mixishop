<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Product_Image;
use App\Size;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function listuser(Request $request)
    {
        $user = User::all();
        return view('listuser', ['user' => $user]);
    }

    public function get_edit_user(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return view('edit_user', ['user' => $user]);
    }

    public function post_edit_user(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->avatar = $request->avatar;
        $user->save();
        return redirect()->route('listuser');
    }

    public function delete_user(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();
        return redirect()->route('listuser');
    }


}
