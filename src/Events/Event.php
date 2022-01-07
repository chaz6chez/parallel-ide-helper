<?php

namespace parallel\Events;

/**
 * Class Event
 * @link https://www.php.net/manual/zh/class.parallel-events-event.php
 * @package parallel\Events
 */
final class Event
{
    /** @var int Shall be one of Event\Type constants */
    public $type;

    /** @var string Shall be the source of the event (target name) */
    public $source;

    /** @var object Shall be either Future or Channel */
    public $object;

    /** @var mixed Shall be set for Read/Error events */
    public $value;
}
