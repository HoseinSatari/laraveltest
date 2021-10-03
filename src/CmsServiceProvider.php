<?php namespace Hitler\Cms;

use Hitler\Cms\Cms;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cms', function () {
            return new Cms();
        });

        $this->mergeConfigFrom(__DIR__.'\/Config/ConfigCms.php' , 'cms');
    }

    public function boot()
    {
       require __DIR__ . '\/routes/route.php';

       $this->loadViewsFrom(__DIR__.'\/views/' , 'cms');

       $this->app['router']->middleware('admin' , \Hitler\Cms\Middleware\Admin::class);

       $this->publishes([
           __DIR__.'\/Config/ConfigCms.php' => config_path('cms.php'),
           __DIR__.'\/views/' => base_path('resources/views/vendor/cms'),
           __DIR__.'\/Migration' => database_path('/migrations'),

       ]);


    }
}
