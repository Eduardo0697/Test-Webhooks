<?php

namespace HelloWorld\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TestWebhookRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','TestWebhook\Controllers\ContentController@sayHello');
    }
}