<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use  App\Http\Traits\PostResponses;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
use PostResponses;
    public function __construct()
    {
       $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->indexResponse(PostResource::collection(Post::all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request->validated(); 
        $category = Category::where('name','LIKE','%'.$request->category.'%')->first();
        $post = Post::create([
        'title' =>$request->title,
        'body'  =>$request->body,
        'category_id' => $category->id 
        ]);
        return $this->storeResponse(new PostResource($post));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
  
       return $this->showResponse(new PostResource($post));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $request->validated(); 
        $category = Category::where('name','LIKE','%'.$request->category.'%')->first();
        $post ->update([
        'title' =>$request->title,
        'body'  =>$request->body,
        'category_id' => $category->id 
        ]);
        return $this->updateResponse(new PostResource($post)); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
       
        $post->delete();
        return $this->deleteResponse(new PostResource($post)); 
    }
    
}
