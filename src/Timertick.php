<?php
/**
 * Created by PhpStorm.
 * User: panjun
 * Date: 30/3/18
 * Time: 18:51
 */

namespace Swoole;
class Timertick
{
    public $commands = [];

    public function run(){
        foreach ($commands as $command){
            $app = $this->make($command);
            swoole_timer_tick($app->timer(),function () use ($app){
                $app->handle();
            });
        }
    }

    public function make($class){
        return new $class;
    }
}