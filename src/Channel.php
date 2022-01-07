<?php

namespace parallel;

/**
 * Class Channel
 *
 * @link https://www.php.net/manual/en/class.parallel-channel.php
 * @package parallel
 */
final class Channel
{
    /** @var int Constant for Infinitely Buffered */
    public const Infinite = -1;

    /**
     * Channel constructor.
     * @link https://www.php.net/manual/en/parallel-channel.construct.php
     * @param int|null $capacity
     */
    public function __construct(?int $capacity = null)
    {
    }

    /**
     * @link https://www.php.net/manual/en/parallel-channel.make.php
     * @param string $name
     * @param int|null $capacity
     * @return Channel
     */
    public static function make(string $name, ?int $capacity = null): Channel
    {
    }

    /**
     * @link https://www.php.net/manual/en/parallel-channel.open.php
     * @param string $name
     * @return Channel
     */
    public static function open(string $name): Channel
    {
    }

    /**
     * @linl https://www.php.net/manual/en/parallel-channel.recv.php
     * @return mixed
     */
    public function recv()
    {
    }

    /**
     * @link https://www.php.net/manual/en/parallel-channel.send.php
     * @param mixed $value
     */
    public function send($value): void
    {
    }

    /**
     * @link https://www.php.net/manual/en/parallel-channel.close.php
     */
    public function close(): void
    {
    }
}
