<?php

namespace parallel;

use Countable;
use Iterator;
use parallel\Events\Event;
use parallel\Events\Input;

/**
 * Class Events
 * @link https://www.php.net/manual/zh/class.parallel-events.php
 * @package parallel
 */
final class Events implements Countable, Iterator
{
    /**
     * @link https://www.php.net/manual/zh/parallel-events.setinput.php
     * @param Input $input
     */
    public function setInput(Input $input): void
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-events.addchannel.php
     * @param Channel $channel
     */
    public function addChannel(Channel $channel): void
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-events.addFuture.php
     * @param string $name
     * @param Future $future
     */
    public function addFuture(string $name, Future $future): void
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-events.remove.php
     * @param string $target
     */
    public function remove(string $target): void
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-events.setBlocking.php
     * @param bool $blocking
     */
    public function setBlocking(bool $blocking): void
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-events.setTimeout.php
     * @param int $timeout
     */
    public function setTimeout(int $timeout): void
    {
    }

    /**
     * @link https://www.php.net/manual/zh/parallel-events.poll.php
     * @return Event|null
     */
    public function poll(): ?Event
    {
    }

    public function count()
    {
    }

    public function current()
    {
    }

    public function next()
    {
    }

    public function key()
    {
    }

    public function valid()
    {
    }

    public function rewind()
    {
    }
}
