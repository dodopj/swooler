<?php
/**
 * Created by PhpStorm.
 * User: panjun
 * Date: 30/3/18
 * Time: 18:54
 */

namespace Swoole\Contract;
interface TimerInterface
{
    public function handle();
    public function timer();
}