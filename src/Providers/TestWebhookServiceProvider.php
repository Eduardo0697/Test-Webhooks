<?php

namespace TestWebhook\Providers;


use HelloWorld\Providers\TestWebhookRouteServiceProvider;
use Plenty\Plugin\ServiceProvider;

class TestWebhookServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(TestWebhookRouteServiceProvider::class);
    }
}