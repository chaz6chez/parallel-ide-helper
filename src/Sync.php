<?php

namespace parallel;

/**
 * Class Sync
 * @link https://www.php.net/manual/zh/class.parallel-sync.php
 * @package parallel
 */
final class Sync
{
    /**
     * @link https://www.php.net/manual/zh/parallel-sync.construct.php
     * @param int|float|string|bool $value
     */
    public function __construct($value)
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-sync.invoke.php
     * @param callable $critical
     */
    public function __invoke(callable $critical)
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-sync.get.php
     * @return int|float|string|bool
     */
    public function get()
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-sync.set.php
     * @param int|float|string|bool $value
     */
    public function set($value)
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-sync.wait.php
     */
    public function wait()
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-sync.notify.php
     * @param bool $all
     */
    public function notify(bool $all)
    {
    }


}
