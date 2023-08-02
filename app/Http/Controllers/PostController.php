<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = __('Posts');
        if ($categoryId = request('category_id')) {
            if ($category = Category::find($categoryId)) {
                $title .= ': ' . $category->name;
            }
        }
        $posts = Post::search()->paginate(6);
        return view('front.posts.index', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($post)
    {
        $post = Post::whereSlug($post)
            ->withCount('comments')
            ->with('createdBy', 'category', 'comments.user')
            ->firstOrFail()->view();
        $reletedPosts = Post::Releted($post)->get();
        $title = $post->title;
        $meta = [
            'title' =>  $title,
            'url' => route('posts.show', $post->slug),
            'description' => $post->seo_description,
            'image' => getFile($post->image_thumbnail),
            'image_cover' => getFile($post->image_cover),
        ];
        return view('front.posts.show', compact('title', 'meta', 'post', 'reletedPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
