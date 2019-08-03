<?php

namespace Huojunhao\DwPlugin;

use App\Lib\Common\CommonBase\FileUtil;
use Huojunhao\Generator\GeneratorServiceProviderTrait;
use Illuminate\Support\ServiceProvider;

class DwPluginServiceProvider extends ServiceProvider
{
    use GeneratorServiceProviderTrait;

    protected $namespace_prefix = "Huojunhao\DwPlugin\DwPlugin\\";

    protected $generator_dir = "";


    protected function getGeneratorDir()
    {
        return  __DIR__.'/DwPlugin/';
    }




}
