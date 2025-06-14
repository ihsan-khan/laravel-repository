<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{   
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        
        $this->postRepository->store($request->only('title', 'content'));

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    } 


    public function update(StorePostRequest $request, Post $post)
    {
        
        $this->postRepository->update($request->only('title', 'content'), $post);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $this->postRepository->delete($post);
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
