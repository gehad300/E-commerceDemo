<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return response()->json([
            'code' => 200,
            'category' => CategoryResource::collection($categories)
        ], 200);
    }

 
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json([
            'code' => 200,
            'category' => CategoryResource::make($category)
        ], 200);
    }

}
