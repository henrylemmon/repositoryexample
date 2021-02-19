<?php

namespace App\Providers;

use App\Repository\MysqlPostRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\PostRepositoryInterface;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(PostRepositoryInterface::class, MysqlPostRepository::class);
    }
}
