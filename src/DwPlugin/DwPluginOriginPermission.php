<?php

namespace Huojunhao\DwPlugin\DwPlugin;

use Huojunhao\DwPlugin\DwPlugin\Utils\DwPluginBase;
use Huojunhao\Generator\DwMake\Utils\DwMakeBase;
use Illuminate\Support\Str;

class DwPluginOriginPermission extends DwPluginBase
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'plg:origin_permission  {command_param} {--remove} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成';
    protected $stub_dir;
    protected $des_dir;
    protected $command_param;



    protected function init_configs()
    {
        $this->stub_dir = $this->getBaseStubDir().'/origin_permissionStubs/';
        $this->des_dir = app_path();
        $this->command_param = $this->argument("command_param");
        if (!$this->command_param) {
            $this->error('command_param 必填');
            die;

        }
    }

    protected function makeCommand()
    {
        $dummies = [
            "origin_permission" => Str::snake($this->command_param),
            "OriginPermission" => $this->command_param
        ];
        $this->quickTask($dummies, $this->getTasks());
    }



    protected function getTasks()
    {
        $tasks = [
            [
                'stub_path' => $this->stub_dir . 'origin_permission.stub.php',
                'des_path' => $this->des_dir  . $this->command_param . ".php"
            ]
        ];
        return $tasks;

    }



}
