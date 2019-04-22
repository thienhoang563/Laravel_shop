<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psy\Util\Str;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create() {
        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request) {
        $category = new Category();
        $category->name = $request->name;
        if ($request->slug){
            $category->slug = $request->slug;
        } else {
            $category->slug = Str::slug($request->name, '-');
        }
        if ($request->desc){
            $category->desc = $request->desc;
        }
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('category','public');
            $category->image = $path;
        }
        $category->save();
        Session::flash('success','Created Successful!');
        return redirect()->route('categories.index');
    }
}
