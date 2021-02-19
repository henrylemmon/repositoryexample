<?php

namespace App\Repository;

interface PostRepositoryInterface
{
    public function all();

    public function findById($postId);
}
