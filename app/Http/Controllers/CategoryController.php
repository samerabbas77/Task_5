<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Traits\CategoryResponse;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    use CategoryResponse;
    public function __construct()
    {
       $this->middleware('auth:api');
    } 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->indexResponse(CategoryResource::collection(Category::all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $request->validated(); 
        $category = Category::create([
        'name' =>$request->name,   
        ]);

        return $this->storeResponse(new CategoryResource($category));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $this->showResponse(new CategoryResource($category));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request,Category $category)
    {
        $request->validated(); 
       
        $category ->update([
        'name' =>$request->name,

        ]);
        return $this->updateResponse(new CategoryResource($category)); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->deleteResponse(new categoryResource($category)); 
    }
}
