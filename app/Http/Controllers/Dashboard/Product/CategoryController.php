<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('products.categories.index', compact('categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('products.categories.create', compact('categories'));
    }


    public function store(CategoryRequest $request)
    {
        $category = $request->validated();
        Category::create($category);
        return redirect(route('category.index'));
    }


    public function show($id)
    {
        $category=Category::findOrFail($id);
       $parent=$category->parent?->name;
        return view('products.categories.show',compact('category','parent'));
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();

        return view('products.categories.edit', compact('category', 'categories'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $category=Category::findOrFail($id);
        $validated = $request->validated();
        $category->update($validated);
        return redirect(route('category.index'));
    }

    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $category->delete();

        return redirect(route('category.index',compact('category')));
    }
}
