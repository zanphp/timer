<?php

namespace Zan\Framework\Network\Server\Timer;


use ZanPHP\Exception\System\InvalidArgumentException;

class Timer
{
    /**
     * 添加一个每隔 {$interval} 毫秒 执行一次的计时器任务
     * @param int        $interval  单位: 毫秒
     * @param callable   $callback
     * @param string     $jobId   标识任务的唯一标识符，必须唯一
     *
     * @return string    $jobId   timer job id
     * @throws InvalidArgumentException
     * @throws TimerExistException
     */
    public static function tick($interval, Callable $callback, $jobId='')
    {

    }

    /**
     * 添加一个 {$interval} 毫秒后仅执行一次的计时器任务
     * @param int        $interval  单位: 毫秒
     * @param callable   $callback
     * @param string     $jobId   标识任务的唯一标识符，必须唯一
     *
     * @return string    $jobId timer job id
     * @throws InvalidArgumentException
     * @throws TimerExistException
     */
    public static function after($interval, Callable $callback, $jobId='')
    {

    }

    /**
     * 根据tick timer job id 清除一个计时器任务
     *
     * @param string $jobId
     * @return bool
     */
    public static function clearTickJob($jobId)
    {

    }

    /**
     * 根据after timer job id 清除一个计时器任务
     *
     * @param string $jobId
     *
     * @return bool
     */
    public static function clearAfterJob($jobId)
    {

    }

    /**
     * @param $key
     * @return bool
     */
    public static function clearTickMap($key)
    {

    }

    /**
     * @param $key
     * @return bool
     */
    public static function clearAfterMap($key)
    {

    }
}