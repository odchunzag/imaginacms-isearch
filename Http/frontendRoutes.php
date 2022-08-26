<?php

use Illuminate\Routing\Router;


$locale = LaravelLocalization::setLocale() ?: App::getLocale();

/** @var Router $router */
$router->group(['middleware' => ['localize']], function (Router $router) use ($locale) {
  

    $router->get(trans('isearch::routes.url',[],$locale), [
        'as' => 'isearch.search',
        'uses' => 'PublicController@search'
    ]);
	

});
