<?php

namespace Huojunhao\DwPlugin;

use Illuminate\Support\ServiceProvider;

class DwPluginServiceProvider extends ServiceProvider
{



    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        dump('DwPluginServiceProvider');

//        $this->commands($this->commands);
    }

}
