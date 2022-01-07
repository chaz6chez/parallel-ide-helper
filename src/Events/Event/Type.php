<?php

namespace parallel\Events\Event;

/**
 * Class Type
 * @link https://www.php.net/manual/zh/class.parallel-events-event-type.php
 * @package parallel\Events\Event
 */
final class Type
{
    /** @var int Event::$object was read into Event::$value */
    public const Read = 1;

    /** @var int Input for Event::$source written to Event::$object */
    public const Write = 2;

    /** @var int Event::$object (Channel) was closed */
    public const Close = 3;

    /** @var int Event::$object (Future) raised error */
    public const Error = 4;

    /** @var int Event::$object (Future) was cancelled */
    public const Cancel = 5;

    /** @var int Runtime executing Event::$object (Future) was killed */
    public const Kill = 6;

}
