<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria; 
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function addCategory(){
        return view('admin.addcategory');
    }

    public function postAddCategory(Request $request){
        $category = new Category();
        $category->categoria = $request->categoria;
        $category->save();
        return redirect()->back()->with('category_message', 'Categoria agregada satisfactoriamente');
    }   

}
