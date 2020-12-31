<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->group(['prefix' => 'blog'], function (Router $router) {
    $locale = LaravelLocalization::setLocale() ?: App::getLocale();
    $router->get('posts', [
        'as' => $locale . '.blog',
        'uses' => 'PublicController@index',
        'middleware' => config('asgard.blog.config.middleware'),
    ]);
    $router->get('posts/{slug}', [
        'as' => $locale . '.blog.slug',
        'uses' => 'PublicController@show',
        'middleware' => config('asgard.blog.config.middleware'),
    ]);
    $router->get('categories/{slug}', [
        'as' => $locale . '.category.slug',
        'uses' => 'PublicController@category',
        'middleware' => config('asgard.blog.config.middleware'),
    ]);
    Route::get('posts','PublicController@index');

    Route::get('posts.search','PublicController@search')->name('search');
});
