<?php

namespace App\Repository;

use App\Models\Post;

class MysqlPostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::orderBy('created_at', 'desc')
            ->with('owner')
            ->get();
    }

    public function findById($postId)
    {
        return Post::where('id', $postId)
            ->with('owner')
            ->firstOrFail();
    }
}
