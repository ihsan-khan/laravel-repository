<?php 

namespace App\Repositories\Interfaces;
use App\Models\Post;    

interface PostRepositoryInterface
{
    public function all();

    public function store(array $data);

    public function update(array $data, Post $post);

    public function delete(Post $post);
}
