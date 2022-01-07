<?php

namespace parallel\Events;

/**
 * Class Input
 * @link https://www.php.net/manual/zh/class.parallel-events-input.php
 * @package parallel\Events
 */
final class Input
{
    /**
     * @link https://www.php.net/manual/zh/parallel-events-input.add.php
     * @param string $target
     * @param $value
     */
    public function add(string $target, $value): void
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-events-input.remove.php
     * @param string $target
     */
    public function remove(string $target): void
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-events-input.clear.php
     */
    public function clear(): void
    {
    }
}
