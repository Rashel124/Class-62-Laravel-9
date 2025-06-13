<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function categoryCreate()
    {
        return view('backend.category.create');
    
    }


    public function categoryStore (Request $request)
    {
        $category = new Category();

        $category->name = "$request->name";
        $category->slug = Str::slug($request->name);
        
        if(isset($request->image)){
            $imageName = rand().'-category-'.'.'.$request->image->extension(); //12345-category-.webp
            $request->image->move('backend/images/category/', $imageName);

            $category->image = $imageName;
        }
        // $category->image = $request->image;
        $category->save();
        return redirect()->back();
    }
}

