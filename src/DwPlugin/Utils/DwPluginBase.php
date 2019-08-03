<?php
namespace Huojunhao\DwPlugin\DwPlugin\Utils;

use Huojunhao\Generator\DwMake\Utils\DwMakeBase;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/13
 * Time: 18:44
 */
abstract  class DwPluginBase extends DwMakeBase {

    protected function getBaseStubDir()
    {
        return __DIR__ . '/../../D5PluginStubs';

//        return storage_path('/stubs/D5MakeStubs');
    }

}
