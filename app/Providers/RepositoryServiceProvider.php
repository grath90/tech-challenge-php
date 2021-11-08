<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\FormContentRepositoryInterface;
use App\Repository\LoremIpsumRepositoryInterface;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\Eloquent\FormContentRepository;
use App\Repository\Eloquent\LoremIpsumRepository;
use App\Repository\Eloquent\BaseRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(FormContentRepositoryInterface::class, FormContentRepository::class);
        $this->app->bind(LoremIpsumRepositoryInterface::class, LoremIpsumRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
