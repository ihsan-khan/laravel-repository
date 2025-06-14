<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    /**
     * Get all posts.
     *
     * @return array
     */
    public function all()
    {
        return Post::all();
    }

    public function store(array $data)
    {
        return Post::create($data);
    }

    public function update(array $data, Post $post)
    {
        return $post->update($data);
    }

    public function delete(Post $post)
    {
        return $post->delete();
    }
}

